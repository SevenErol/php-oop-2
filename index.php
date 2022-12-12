<?php

require __DIR__ . './Product.php';

require __DIR__ . './Category.php';

$products_dog = [
    new Product('https://picsum.photos/400/200', 'bowl', 'Multifunctional bowl for food and water', true, '24.99£', new Category('objects'), 7),
    new Product('https://picsum.photos/400/200', 'ball', 'Gum ball for playing', false, '24.99£', new Category('games'), 5),
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

    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .fa-dog {
            font-size: 36px;
        }
    </style>

    <!-- link fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>

<body>


    <main>
        <div class="container">

            <div class="row p-5 align-items-stretch">

                <?php foreach ($products_dog as $key => $product) : ?>
                    <div class="col-4">

                        <div class="card justify-content-between" style="height: 100%">
                            <img class="img-fluid" src="<?php echo $product->image ?>" alt="">

                            <div class="card-body">

                                <h4 class="text-center mb-5"><?php echo $product->name ?></h4>

                                <p><strong>Description: </strong><?php echo $product->description ?></p>

                                <?php if ($product->availability) : ?>

                                    <div class="d-flex align-items-center">

                                        <p class="m-0 p-0">The product is available now</p>

                                        <i class="fa-solid fa-circle green ms-2"></i>

                                    </div>



                                <?php else : ?>

                                    <div class="d-flex align-items-center">

                                        <p class="m-0 p-0">We are sorry the product is not available</p>

                                        <i class="fa-solid fa-circle red ms-2"></i>

                                    </div>


                                <?php endif; ?>

                                <div>
                                    <strong><?php echo $product->price ?></strong>
                                </div>

                                <div class="text-center">

                                    <i class="fa-solid fa-dog"></i>

                                </div>

                                <p class="category text-center mt-3"><strong>Category: </strong><?php echo $product->category->type ?></p>

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