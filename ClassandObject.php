<?php

 class Customer
{
  public  $name;
  public $adress;

  public function set_name($name)
  {
        $this->name=$name;
  }
  public function set_adress($adress)
  {
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

class Product extends Customer
{
   public $price;
}

$product=new Product();
echo $product->price=1500.;
echo "<br>";
$product->set_name("Arif");
echo $product->get_name();

$customer=new Customer();
$customer->set_name('Asif');
echo $customer->get_name();
echo '<br>';
$customer->set_adress('Rajshahi');
echo $customer->get_adress();

?>