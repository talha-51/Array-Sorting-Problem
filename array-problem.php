<?php
$numbers = array(1,7,3,5,6,9,15);
$target_number = 5;
sort($numbers);
$arrlength = count($numbers);
$flag = 0;

// $arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $numbers[$x];
//   echo "<br>";
// }
// echo "<br><br><br>";

for($x = 0; $x < $arrlength; $x++) {
  if($numbers[$x] == $target_number) {
  	echo $x;
    $flag = 1;
    break;
  }
  else if($numbers[$x] > $target_number){
    echo $x;
    $flag = 1;
    break;
  }
}

if($flag==0) {
    echo $arrlength;
}