<?php

require_once __DIR__ . "/../traits/Description.php";
class Product
{
    use Description;

    public $name;
    public $price;
    public $img;
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
        if (is_nan($this->price)) {
            throw new Exception("Quello che hai inserito non è un numero");
        }
        return $this->price . " €";
    }

    // public function setprice($price)
    // {
    //     $this->price = $price;
    // }
}
