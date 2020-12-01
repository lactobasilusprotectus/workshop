<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SetupInterface;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    protected $setup;

    public function __construct(SetupInterface $setup)
    {
        $this->setup = $setup;
    }

    public function index()
    {
        return view('admin.setup');
    }

    public function getData(): \Illuminate\Http\JsonResponse
    {
        $data = $this->setup->show(1);

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $data = $this->setup->update($request->all(), 1);

        return response()->json([
            'status' => 'OK',
            'message' => 'data ditemukan',
            'data' => $data
        ]);
    }
}
