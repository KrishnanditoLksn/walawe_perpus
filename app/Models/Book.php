<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $guarded = ['id_buku'];

    protected $fillable = ['judul', 'nama_penulis', 'isbn', 'penerbit', 'tanggal_terbit'];

    //Relationship Book to Copy Books
    public function to_copy(): void
    {
        
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
