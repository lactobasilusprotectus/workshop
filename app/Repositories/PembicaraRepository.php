<?php


namespace App\Repositories;


use App\Models\Pembicara;
use App\Repositories\Interfaces\PembicaraInterface;

class PembicaraRepository implements PembicaraInterface
{
    protected $pembicara;

    public function __construct(Pembicara $pembicara)
    {
        $this->pembicara = $pembicara;
    }

    public function all()
    {
        return $this->pembicara->all();
    }

    public function edit($id)
    {
       return $this->pembicara->find($id);
    }

    public function update(array $data, $id)
    {
        return $this->pembicara->find($id)->update($data);
    }

    public function store(array $data)
    {
        return $this->pembicara->create($data);
    }

    public function delete($id)
    {
        return $this->pembicara->find($id)->delete();
    }
}
