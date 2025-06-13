<?php

namespace App\Http\Controllers;

use App\Models\OrderCatalogs;
use App\Models\ProductCatalog;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $products = ProductCatalog::all();
        // dd($products);
        return view('order', compact('products'));
        
    } 

    public function store(Request $request) {
        // dd($request->all());
        $responseForm = $request->validate([
            'nama'=> 'required',
            'nomor_telepon' =>  'required',
            'jenis_pencucian' => 'required' ,
            'price' => 'required',
            'nama_bank_pembayaran' => 'required',
            'upload_pembayaran' => 'required' ,
            'status' => 'required',
        ]);
        // dd($responseForm);

        // Gabungkan array jadi string
        $responseForm['jenis_pencucian'] = implode(', ', $responseForm['jenis_pencucian']);
        
        OrderCatalogs::create($responseForm);

        // dd($orders);
        return view('history');

    }
}