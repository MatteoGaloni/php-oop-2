<?php
class Product
{
    private $name;
    private $price;
    public $category;

    function __construct($name, $price, Category $category)

    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getprice()
    {
        return $this->price;
    }
    public function setprice($price)
    {
        $this->price = $price;
    }
    // public function getcategory()
    // {
    //     return $this->category;
    // }
    // public function setDiscount($discount){
    //     if($this->price > 60){
    //     $this->discount = 30;
    //     } else {
    //         $this->discount = 0;
    //     }
    // }

}
