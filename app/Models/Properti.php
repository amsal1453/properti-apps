<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Properti extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_properti',
        'deskripsi',
        'lokasi',
        'whatsapp_pemilik',
        'pemilik',
        'tipe_properti',
        'status'
    ];

    public function gambarProperti(): HasMany
    {
        return $this->hasMany(GambarProperti::class, 'properti_id');
    }

    public function permintaanInfo(): HasMany
    {
        return $this->hasMany(PermintaanInfo::class, 'properti_id');
    }
}
