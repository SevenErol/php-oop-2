<?php

require __DIR__ . './Product.php';

require __DIR__ . './Category.php';

$products_dog = [
    new Product('https://picsum.photos/400/200', 'bowl', 'Multifunctional bowl for food and water', true, '24.99£', new Category('objects'), 7),
    new Product('https://picsum.photos/400/200', 'ball', 'Gum ball for playing', true, '24.99£', new Category('games'), 5),
    new Product('https://picsum.photos/400/200', 'kibble', 'Food for your dog', true, '24.99£', new Category('food'), 10),
];

$products_cat = [
    new Product('https://picsum.photos/400/200', 'bowl', 'Multifunctional bowl for food and water', true, '24.99£', new Category('objects'), 7),
    new Product('https://picsum.photos/400/200', 'ball', 'Gum ball for playing', true, '24.99£', new Category('games'), 5),
    new Product('https://picsum.photos/400/200', 'kibble', 'Food for your dog', true, '24.99£', new Category('food'), 10),
];

var_dump($products_cat);
