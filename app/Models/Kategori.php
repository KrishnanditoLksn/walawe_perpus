<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['nama_kategori'];

    //Relationship Kategori dengan Buku
    public function category_rels_book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}

