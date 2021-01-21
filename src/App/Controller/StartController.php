<?php
namespace App\Controller;

class StartController
{
    /**
     * @param int $id
     *
     * @return void
     */
    public function index(int $id): void
    {
        echo "start".$id;
    }
}
