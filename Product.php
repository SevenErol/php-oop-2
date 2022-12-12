<?php

class Product
{
    public $image;
    public $name;
    public $description;
    public $availability;
    public $price;
    protected $category;
    public $quantity;

    public function __construct($image, $name, $description, Bool $availability, $price, Category $category, Int $quantity)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->avialability = $availability;
        $this->price = $price;
        $this->category = $category;
        $this->quantity = $quantity;
    }
}
