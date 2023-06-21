<?php
class Toy extends Category
{
    private $material;
    public function __construct($name, $price, Category $category, $material)
    {
        parent::__construct($name, $price, $category);
        $this->material = $material;
    }

    public function getSize()
    {
        return $this->material;
    }
}
