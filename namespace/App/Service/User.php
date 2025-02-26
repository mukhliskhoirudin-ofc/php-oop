<?php

namespace App\Service;  //tambahkan namespace karna class User ada 2

class User
{
    public function __construct()
    {
        echo "ini adalah class" . __CLASS__;
    }
}
