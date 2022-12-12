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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce pets products</title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>

<body>


    <main>
        <div class="container">

            <div class="row p-5">

                <?php foreach ($products_dog as $key => $product) : ?>
                    <div class="col-4">

                        <div class="card">
                            <img class="img-fluid" src="<?php echo $product->image ?>" alt="">

                            <div class="card-body">

                                <h4><?php echo $product->name ?></h4>

                            </div>

                        </div>

                    </div>

                <?php endforeach ?>

            </div>

        </div>

    </main>



    <!-- script bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>

</body>

</html>