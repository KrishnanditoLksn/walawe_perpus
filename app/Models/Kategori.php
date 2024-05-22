<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['nama_kategori'];

    //Relationship Kategori dengan Buku
    public function to_book_kategori(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}

