
<?php

//  $array=array(5,7,3,4,9,22,34,56,7,45);

// function getmax($array)
// {
//     $count=count($array);
//     $max=$array[0];

//     for( $i=1; $i < $count; $i++)
//      if( $max < $array[$i] )
//         $max = $array[$i];

//         return $max;

// }

// //echo "hello";

// echo (max($array));

 $array=array(-1, 2, -5, 70,8, 16,50);

 $max=$array[0];

 $count=count($array);

 for( $i=0; $i < $count; $i++)
 {
    if( $array[$i] > $max){
        $max = $array[$i];
    }
 }

 echo $max;

?>