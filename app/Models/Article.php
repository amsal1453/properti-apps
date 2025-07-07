<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['judul', 'konten', 'excerpt', 'kategori', 'gambar', 'slug', 'admin_id', 'tanggal_posting'];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
