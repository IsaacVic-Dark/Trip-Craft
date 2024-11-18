<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MpesaService;

class MpesaController extends Controller
{
    //
    protected $mpesaService;
    public function __construct(MpesaService $mpesaService){
        $this->mpesaService = $mpesaService;
    }

    public function initiatePayment(Request $req){
        $req->validate([
            'phone' => 'required',
            'price' => 'required',
        ]);
        $res = $this->mpesaService->stkPush($req->phone, $req->price);
        return response()->json($res);
    }
}
