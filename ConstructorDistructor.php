<?php


//Constructor 

class Customer
{
    public $name;
    public $adress;

    function __construct($name,$adress)
    {
        $this->name=$name;
        $this->adress=$adress;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_adress()
    {
        return $this->adress;
    }
}

$customer=new Customer('asif','natore');

echo $customer->get_name();
echo $customer->get_adress();

$customer=new Customer('arif','natore');

echo $customer->get_name();
echo $customer->get_adress();
echo "<br>";


//destructor

class Person
{
    public $name;
    public $hometown;

    function __construct($name,$hometown)
    {
        $this->name=$name;
        $this->hometown=$hometown;
    }

    function __destruct()
    {
        echo "His name is {$this->name} and he is from {$this->hometown}";
    }

}

$person=new Person('abir','lalpur');


?>