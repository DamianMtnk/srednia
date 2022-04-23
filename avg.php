<?php
function core_mean($array)
{
 // Valid information from user... also can create validator of type's variables
 $tmp['how'] = count($array);
 for($h = 0; $h < $tmp['how']; ++$h)
 {
  $tmp['sum'] += $array[$h];
 }
 return $tmp['sum'] / $tmp['how'];
}

// Execute
$array[0] = 1;
$array[1] = 5;
$array[2] = 3;
echo core_mean($array = $array);
?>