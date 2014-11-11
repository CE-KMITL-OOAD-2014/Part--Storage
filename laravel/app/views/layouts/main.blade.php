<!-- Main Layouts -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <!-- Basic Page Needs
   ================================================== -->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="language" content="en" />
  
   <title> Tutorial Laravel 4 Framework </title>
   <meta name="keywords" content="your, awesome, keywords, here" />
   <meta name="author" content="Jon Doe" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Lorem ipsum dolor sit amet" />
  
   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <!-- CSS Bootstrap core CSS
   ================================================== -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- นำเข้าไฟล์ header.blade.php -->
    @include("layouts.header")
    <div class="container">
        @yield("content")
    </div>
    <!-- นำเข้าไฟล์ footer.blade.php -->
    @include("layouts.footer")
</body>
</html>