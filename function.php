<?php
    function message()
    {
        echo "Hello World";
        echo "<br>";
    }

    message();

    function arr()
    {
        $array=[

            'name',
            'adress',
            'phone'
        ];
    
        $count=count($array);
       // echo $count;

        for($i=0; $i < $count; $i++)
        {
            echo $array[$i];
            echo "<br>";
        }
    }

    arr();



    function number(int $a , int $b)
    {
        return ($a+$b);
    }

    echo number(8,4);
?>