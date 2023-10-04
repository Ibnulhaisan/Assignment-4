<?php

class Product{
   private $id; 
private $name; 
private $price; 
public function __construct($id,$name,$price){
    $this->id = $id;
      $this->name = $name;
      $this->price = $price;
}

public function getId(){
    return $this->id;
}

 public function getName(){
    return $this->name;
}
public function getPrice(){
    return $this->price;
}
public function getFormattedPrice() {
        return number_format($this->price, 2);
    }
public function showDetails()
{
    echo "Product Details :"."\n";
    echo "- ID:".$this->getId()."\n";
    echo "- Name:".$this->getName()."\n";
    echo "- Price:$".$this->getPrice();
}
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


?>