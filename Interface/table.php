<?php

$x = [[11,12,13],[21,22,23],[31,32,33]];
//$x = [{a:1,b:2,c:3},{},{}]

echo('<table border="1" width="200px">');
foreach ($x as $ele) {
	echo('<tr>');
	foreach ($ele as $ele2) {
		echo('<td>$ele2</td>');
	}
	echo('</tr>');
}
echo('</table>');
var_dump($x);

 ?>


 <?php
 		for($i=0;$i<=10;$i++){
  ?>
  a <br>
  <?php

}
   ?>


