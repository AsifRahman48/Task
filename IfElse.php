<?php

$array=[
        'BS-23',
        'Bkash',
        'Brian-Craft',
        'RFL',
        'BSRM',
        'Squer'
];

$count=count($array);

if($array[0]!='BS-23')
{
    echo "Software";
    echo "<br>";
}

else if ($array[5]=='Squer')
{
    echo "Populer Company";
    echo "<br>";
}



//  if($count==6){
//     echo "true";
// }

else {
    echo "False";
}

// Switch Case

$arr='RFL';

switch($arr)
{
    case 'BS-23':
        echo "Software Company";
        break;
    
    case 'Bkash':
        echo "Software Company";
        break;

    case 'Brain-Craft':
        echo "Software Company";
        break;

     case 'RFL':
            echo "Populer Company";
            break;

    case 'BSRM':
            echo "Populer Company";
            break;

    case 'Squre':
            echo "Populer Company";
            break;

}

?>