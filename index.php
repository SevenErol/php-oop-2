<?php

require __DIR__ . './Product.php';

require __DIR__ . './Category.php';

$bowl = new Product('bowl', 'Useful object to put food for your dog', '3.4 stars', '24.99', new Category('dog'));

var_dump($bowl);
