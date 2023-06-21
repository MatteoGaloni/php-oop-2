<?php
class Food extends Product
{
    private $type;

    public function __construct($name, $price, Category $category, $type)
    {
        parent::__construct($name, $price, $category);
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
