@ok callback
<?php

function sq ($x) {
  return $x * $x;
}

echo "Callback test\n";
$a = array(1,2,3);
array_map (sq, $a);
var_dump($a);

array_map ('sq', $a);
var_dump($a);

var_dump (array_map ('sq', $a));

var_dump (array_map (function ($x) {return $x - 5;}, $a));
?>
