<?php


namespace App\Web\Controller;


class IndexController
{
    public function index(int $id): void
    {
        echo "start ".$id;
    }
}