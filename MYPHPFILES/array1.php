<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
var_dump($arr);                
unset($arr[5]); // This removes the element from the array
var_dump($arr); 
unset($arr);
var_dump($arr);     // This deletes the whole array
?>
