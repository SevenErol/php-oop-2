<?php

require __DIR__ . "/message.php";

class Welcome
{

    use message;
}

$object = new Welcome;

$object->welcome();
