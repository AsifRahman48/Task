<?php

$array=['bus','car','bike'];
echo '<pre>';
print_r($array);
echo '</pre>';

foreach ($array as $list){
    echo $list.',';
}


$age=[
   'asif'=>'24',
   'pavel'=>'26',
   'taskin' =>'30'
];

echo '<pre>';
print_r($age);
echo '</pre>';

echo $age['taskin'].'<br>';

foreach ($age as $key=>$list){
    echo 'name='.$key.','.'age=>'.$list.'<br>';

}

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
$car=[
  array( "Volvo",22,18),
    array('BMW',15,15)
];
echo '<pre>';
print_r($car);
echo '</pre>';

echo $car[1][0];
echo '<br>';
echo $car[0][2];

?>