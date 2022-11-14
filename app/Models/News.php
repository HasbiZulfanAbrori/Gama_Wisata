<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    protected $table = "news";
    protected $guarded = ['id'];
    protected $fillable = [
        'nama','gambar,','keterangan'
    ];
    

    
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}