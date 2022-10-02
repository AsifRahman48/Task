
<?php

$array=array(2,5,8,9,10,7,3,-3,-1,-8,12);

$count=count($array);
$min=$array[0];

for($i=0; $i < $count; $i++)
{
    if($array[$i] < $min)
    {
        $min = $array[$i];
    }
}

echo $min;

?>