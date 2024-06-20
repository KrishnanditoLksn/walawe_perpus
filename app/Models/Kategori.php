<?php

namespace App\Models;

use Database\Factories\KategoriFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = ['id'];
    protected $fillable = ['nama_kategori'];

    //Relationship Kategori dengan Buku
    public function category_rels_book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    public static function kategori_factory():Factory{
        return KategoriFactory::new();
    }
}
