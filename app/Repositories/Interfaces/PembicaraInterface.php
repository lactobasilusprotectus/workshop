<?php


namespace App\Repositories\Interfaces;


interface PembicaraInterface
{
    public function all();

    public function edit($id);

    public function update(array $data, $id);

    public function store(array $data);

    public function delete($id);
}
