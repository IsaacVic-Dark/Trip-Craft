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
        // $price = $req->query('price');
        // dd($price);
        $res = $this->mpesaService->stkPush($req->phone, $req->price);
        // echo "<script>console.log('PHP message: $price')</script>";
        return response()->json($res);
    }

    // public function callback(Request $req){

    // }
}
