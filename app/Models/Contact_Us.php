<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Us extends Model
{
    protected $table = "contact_us";
    protected $guarded = ['id'];
    protected $fillable = [
        'no_telp','alamat'
    ];
}
