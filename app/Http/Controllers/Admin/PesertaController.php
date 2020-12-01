<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\RegisterInterface;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    protected $peserta;

    public function __construct(RegisterInterface $register)
    {
        $this->peserta = $register;
    }

    public function index()
    {
        return view('admin.peserta');
    }

    public function getAllRegister(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
           'data' => collect($this->peserta->all())->toJson()
        ]);
    }
}
