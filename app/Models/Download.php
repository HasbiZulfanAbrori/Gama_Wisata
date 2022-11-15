<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = "download";
    protected $guarded = ['id'];
    protected $fillable = [
        'nama_file','file'
    ];
}
