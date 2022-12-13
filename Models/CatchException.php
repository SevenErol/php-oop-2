<?php

require __DIR__ . "/exception.php";

class myException
{
    use exception1;
}

$newObject = new myException;


try {

    $newObject->divide(5, 0);

    echo 'Success!';
} catch (Exception $e) {

    echo "Unable to divide.";
}
