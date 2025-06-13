<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCatalogs extends Model
{
    //
    protected $table = 'order_catalogs';
    protected $fillable = [
        'nama',
        'notelp',
        'jenis_pencucian',
        'price',
        'nama_bank_pembayaran',
        'upload_pembayaran',
        'status'
    ];
}