<?php
namespace App\Controller;

class StartController
{
    public function index($id)
    {
        dump($id);
        echo "start".$id;
    }
}
