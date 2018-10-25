<?php
$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
foreach($temp as $i => $value)
{
	$sum=$sum+$value;
	
}

$avg=($sum/($i));

echo "Average Temperature is: $avg";

sort($temp);
echo"<br>";
echo "List of five lowest temperature are:";
for($i=0;$i<5;$i++)
{
	echo " $temp[$i]  ";
}

rsort($temp);
echo"<br>";
echo "List of five highest temperature are:";
for($i=0;$i<5;$i++)
{
	echo " $temp[$i]  ";
}
?>
