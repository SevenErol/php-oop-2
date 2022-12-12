<section id="dogs">

    <div class="container p-3">

        <h2 class="text-center">Dogs Products</h2>

        <div class="row p-5 align-items-stretch">

            <?php foreach ($products_dog as $key => $product) : ?>
                <div class="col-4">

                    <div class="card" style="height: 100% ;">
                        <img class="img-fluid" src="<?php echo $product->image ?>" alt="">

                        <div class="card-body d-flex flex-column justify-content-between">

                            <h4 class="text-center mb-5"><?php echo $product->name ?></h4>

                            <p><strong>Description: </strong><?php echo $product->description ?></p>

                            <div class="d-flex flex-column">

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

                </div>

            <?php endforeach ?>

        </div>

    </div>

</section>