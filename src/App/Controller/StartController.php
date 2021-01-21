<?php
namespace App\Controller;

class StartController
{
    public function index(int $id): void
    {
        echo "start ".$id;
    }
}
