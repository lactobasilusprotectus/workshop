<?php


namespace App\Repositories;


use App\Models\Peserta;
use App\Repositories\Interfaces\RegisterInterface;

class RegisterRepository implements RegisterInterface
{
    protected $peserta;

    public function __construct(Peserta $peserta)
    {
        $this->peserta = $peserta;
    }

    public function all()
    {
        return $this->peserta->all();
    }

    public function store(array $data)
    {
        return $this->peserta->create($data);
    }
}
