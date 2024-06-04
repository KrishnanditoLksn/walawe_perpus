<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Carbon|mixed $tanggal_dikembalikan
 * @property mixed $tanggal_dipinjam
 * @property mixed $nama_peminjam
 * @property mixed $email_peminjam
 */
class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $guarded = ['id_peminjaman'];
    protected $fillable = ['nama_peminjam', 'no_telp_peminjam', 'email_peminjam', 'tanggal_dipinjam'];

    public function copy_buku(): BelongsTo
    {
        return $this->belongsTo(Copy_Buku::class);
    }
}
