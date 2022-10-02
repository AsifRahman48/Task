<?php


$array=array(-1, 2, 16, 70 , 8, 50, -5);

$sum=0;

$count=count($array);

for( $i=0; $i < $count; $i++)
{
   $sum=$sum+$array[$i];
}

echo $sum;


?>