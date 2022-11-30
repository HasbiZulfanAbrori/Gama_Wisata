<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $table = "highlight";
    protected $guarded = ['id'];
    protected $fillable = [
        'gambar_highlight','judul_highlight', 'deskripsi_highlight', 'link'
    ];
}
