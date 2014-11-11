<?php
class UsersController extends BaseController {
    protected $layout = 'layouts.main'; // กำหนด Layouts ที่ใช้งานเป็น main.blade.php
    public function mainAction() {
        return View::make('users/main');
    }
    public function indexAction() {
        $user = Session::get('user');
        if (empty($user)) {
           return View::make('users/login');
        } else {
            return View::make('users/profile')->with('resuft',$user);
        }
    }
    public function loginAction(){
        $msg = array(
            'username.required' => 'username ไม่สามารถเป็นค่าว่างได้',
            'password.required' => 'password ไม่สามารถเป็นค่าว่างได้',
            'username.min' => 'username ต้องไม่ต่ำกว่า :min ตัวอักษร',
            'password.min' => 'password ต้องไม่ต่ำกว่า :min ตัวอักษร',
        );
        $rules = array(
            'username' => 'required|min:4',
            'password' => 'required|min:4'
        );
        if (Input::server("REQUEST_METHOD") == "POST"){
           $validator = Validator::make(Input::all(),$rules,$msg);
            if($validator->fails()){
                $messages = $validator->messages();
                return Redirect::to('user/login')->withErrors($messages)->withInput();
            }else{
              $username = Input::get('username');
              $password = Input::get('password');
              $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->count();
              if(empty($users)){
                $messages = array(
                   array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
                );
                return Redirect::to('user/login')->withErrors($messages)->withInput();
              }else{
                $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->get();
                Session::put('user',$users);
                return Redirect::to('user/profile');
              }
            }
        } 
    }
    public function profileAction(){
        $val = Session::get('user');
        return View::make('users/profile')->with('resuft',$val);
    }
}