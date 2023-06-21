<?php
class Toy extends Product
{
    private $material;
    public function __construct($name, $price, Category $category, $material)
    {
        parent::__construct($name, $price, $category);
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
