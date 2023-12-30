<?php

declare(strict_types=1);

namespace App;

class Key
{
    public function __construct(private string $name)
    {
    }
    public function __destruct()
    {
        echo $this->name . " destructor</br>";
    }
}
