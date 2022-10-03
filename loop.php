<?php

//while loop

$array=[
    'lalpur',
    'natore',
    'Rajshahi',
    'Dhaka'
];


$count=count($array);

$i=0;

while($i<$count)
{
    echo $array[$i];
    echo "<br>";
    $i++;
}

// DO while

$array=[
    'bus',
    'car',
    'bike',
    'by-cycle'
];

$count=count($array);

echo $count.'<br>';

$i=0;

do{
    echo $array[$i];
    echo "<br>";
    $i++;
}
while($i<$count);

//for loop

$array=[
    'BS-23',
    'Bkash',
    'Brian-Craft'
];

$count=count($array);

for( $i = 0; $i < $count; $i++ )
{
    $res=$array[$i];
    echo $res;
    echo "<br>";

}

//foreach loop

$array=[
    'Name'=>"Asif",
    'Adress'=>'Natore',
    'Mobile'=>'01785209073',
    'Gender'=>'Male'
];

foreach($array as $key=>$list)
{
    echo $key;
    echo "<br>";
    echo $list;
    echo "<br>";
}


//Break and Continue 

$array=[
    'water',
    'oil',
    'gass'
];

$count=count($array);

foreach($array as $list)
{
    if($list=='gass')
    {
        break;
    }
    if($list=='oil')
    {
        continue;
    }
    echo $list;
    echo "<br>";
}


?>