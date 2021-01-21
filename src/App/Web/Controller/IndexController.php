<?php


namespace App\Web\Controller;


class IndexController
{
    public function index($id): void
    {
        dump($id);
        echo "start".$id;
    }
}