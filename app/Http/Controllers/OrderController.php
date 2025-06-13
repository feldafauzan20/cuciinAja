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
            'jenis_pencucian' => 'required|array',
            'nama_bank_pembayaran' => 'required',
            'upload_pembayaran' => 'required',
        ]);

        $products = ProductCatalog::whereIn('id', $responseForm['jenis_pencucian'])->get();
        $responseForm['price'] = $products->sum('price');
        $responseForm['status'] = 'pending';
        $responseForm['jenis_pencucian'] = $products->pluck('title')->implode(', ');

        OrderCatalogs::create($responseForm);

        return view('history');
    }
}