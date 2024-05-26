<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['nama_admin', 'password', 'email'];

    //Relationship antara admin dengan buku
    public function to_admin_buku(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
