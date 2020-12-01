<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\RegisterConfirmn;
use App\Repositories\Interfaces\RegisterInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public $peserta;

    public function __construct(RegisterInterface $register)
    {
        $this->peserta = $register;
    }

    public function index()
    {
        return view('front.index');
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->all();

        $valid = Validator::make($data, [
            'nim' => ['required', 'numeric'],
            'nama' => ['required', 'string'],
            'email' => ['required', 'email:dns,rfc,spoof'],
            'whatsapp' => ['required', 'numeric']
        ]);

        if ($valid->fails())
        {
            return response()->json([
                'status' => 'error',
                'message' => $valid->errors()->first()
            ]);
        }

        $test = $this->peserta->store($data);

        Mail::to($data['email'])->send(new RegisterConfirmn($data['nama']));

        return response()->json([
            'status' => 'oke',
            'message' => 'Pendaftaran Berhasil',
            'data' => $test
        ]);
    }
}
