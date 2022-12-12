<?php

class Customer
{

    public $name;
    public $surname;
    public $email;
    public $date_of_birth;
    public $registration = false;
    public $discount = 0;

    public function __construct($name, $surname, $email, $date_of_birth)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->date_of_birth = $date_of_birth;
    }

    public function success_registration()
    {

        $this->registration = true;
        $this->discount = 20;
    }
}
