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
            'amount' => 'required|numeric',
        ]);
        $res = $this->mpesaService->stkPush($req->phone, $req->amount);
        return response()->json($res);
    }

    // public function callback(Request $req){

    // }
}
