<?php

class Product
{
    public $name;
    public $description;
    public $ratings;
    public $price;
    protected $category;

    public function __construct($name, $description, $ratings, $price, Category $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->ratings = $ratings;
        $this->price = $price;
        $this->category = $category;
    }
}
