<?php

namespace App\Models;

use Illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul' ,
        'idpengarang' ,
        'idkategori' ,
        'tahunterbit' ,
        'sinopsis' ,
        'cover'
    ];

    public function kategori()
    {
        return $this->belongsTo(Category::class);
    }
}
