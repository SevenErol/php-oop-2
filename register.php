<?php

if (isset($_POST) && count($_POST) > 0) {


    require __DIR__ . '/Models/Customer.php';
    $customer = new Customer($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['date_of_birth']);
    $customer->success_registration();



    $jsonCustomer = json_encode($customer);
    var_dump($jsonCustomer);



    // setcookie('user', $jsonCustomer);
    // setcookie('loggedIn', 'true');

    header('Location: /');
}



?>

<section>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">
                Register</h1>
            <p class="lead">Get 20% off on all products</p>
        </div>
    </div>
    <div class="container">

        <h1>
            Register
        </h1>
        <form action="/register.php" method="post">

            <div class="mb-3">

                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>

            </div>

            <div class="mb-3">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Your email" required>

            </div>

            <div class="mb-3">

                <label for="surname" class="form-label">Surname</label>
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Your surname" required>

            </div>

            <div class="mb-3">

                <label for="birth" class="form-label">Date of Birth</label>
                <input type="text" name="birth" id="birth" class="form-control" placeholder="Your date" required>

            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</section>