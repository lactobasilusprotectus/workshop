<?php


namespace App\Repositories\Interfaces;


interface SetupInterface
{
    public function show($id);

    public function update(array $data, $id);
}
