<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $guarded = ['id'];
    protected $fillable = [
        'gambar_produk','nama_produk,','deskripsi_produk'
    ];
}
