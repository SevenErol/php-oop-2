<?php

trait exception1
{

    public function divide($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
}
