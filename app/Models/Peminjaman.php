<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;

    protected  $guarded=['id_peminjaman'];
    protected $fillable =['nama_peminjam','no_telp_peminjam','email_peminjam','tanggal_dipinjam'];

    public function copy_buku(): BelongsTo
    {
        return $this->belongsTo(Copy_Buku::class);
    }
}
