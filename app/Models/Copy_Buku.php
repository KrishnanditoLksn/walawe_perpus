<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Copy_Buku extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['no_copy_buku'];
    protected $table = 'copy_books';

    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }

    //Relationship Category to Books
    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
