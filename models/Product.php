<?php
class Product
{
    public $name;
    public $price;
    public $category;

    function __construct($name, $price, Category $category)

    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getname()
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
}
