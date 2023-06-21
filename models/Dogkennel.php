<?php
class DogKennel extends Product
{
    private $size;
    public function __construct($name, $price, Category $category, $size)
    {
        parent::__construct($name, $price, $category);
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
