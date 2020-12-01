<?php


namespace App\Repositories;


use App\Models\Workshop;
use App\Repositories\Interfaces\SetupInterface;

class SetupRepository implements SetupInterface
{
    protected $setup;

    public function __construct(Workshop $workshop)
    {
       return $this->setup = $workshop;
    }

    public function show($id)
    {
       return $this->setup->find($id);
    }

    public function update(array $data, $id)
    {
      return  $this->setup->find($id)->update($data);
    }
}
