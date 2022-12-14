<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = "index";
    protected $guarded = ['id'];
    protected $fillable = [
        'video','judul,','branding','is_active'
    ];
}