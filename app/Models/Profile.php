<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $guarded = ['id'];
    protected $fillable = [
        'tentang_kami','visi,','misi', 'gambar1', 'akreditasi', 'gambar2'
    ];
}
