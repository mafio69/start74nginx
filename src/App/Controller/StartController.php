<?php
namespace App\Controller;

class StartController
{
    /**
     * @param int $id
     */
    public function index(int $id): void
    {
        echo "start ".$id;
    }
}
