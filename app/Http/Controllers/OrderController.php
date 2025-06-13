<?php

namespace App\Http\Controllers;


use App\Models\OrderCatalogs;
use App\Models\ProductCatalog;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $products = ProductCatalog::all();
        // dd($products);
        return view('order', compact('products'));

    }

    public function store(Request $request)
    {
        $responseForm = $request->validate([
            'nama' => 'required',
            'notelp' => 'required',
            'jenis_pencucian' => 'required',
            'nama_bank_pembayaran' => 'required',
            'upload_pembayaran' => 'required',
        ]);
        $products = ProductCatalog::all();
        $price = 0;
        foreach ($responseForm['jenis_pencucian'] as $id) {
            $price += $products->where('id', $id)->first()->price;
        }
        $responseForm['price'] = $price;
        $responseForm['status'] = 'pending';

        $responseForm['jenis_pencucian'] = implode(', ', $responseForm['jenis_pencucian']);

        OrderCatalogs::create($responseForm);

        return view('history');

    }
}