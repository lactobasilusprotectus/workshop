<?php


namespace App\Repositories\Interfaces;


interface RegisterInterface
{
    public function all();

    public function store(array $data);
}
