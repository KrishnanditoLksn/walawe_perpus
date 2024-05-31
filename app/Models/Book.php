<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $judul
 * @property mixed $nama_penulis
 * @property mixed $isbn
 * @property mixed $penerbit
 * @property mixed $tahun_terbit
 * @property mixed $id_kategori_buku
 */
class Book extends Model
{
    protected $guarded = ['id_buku'];
    protected $table = 'buku';
    protected $fillable = ['judul', 'nama_penulis', 'isbn', 'penerbit', 'tahun_terbit', 'id_kategori_buku'];

    //Relationship Book to Copy Books
    public function to_copy(): HasMany
    {
        return $this->hasMany(Copy_Buku::class);
    }

    //Relationship Book to Admin
    public function to_admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    //Relationship Book to Kategori
    public function to_kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
