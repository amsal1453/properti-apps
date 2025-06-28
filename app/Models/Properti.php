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
        'status',
        'harga',
        'satuan_harga',
        'jumlah_kamar',
        'jumlah_kamar_mandi',
        'jumlah_parkir',
        'luas_bangunan',
        'latitude',
        'longitude',
        'gambar_utama',
        'is_promo'
    ];
    public function gambar(): HasMany
    {
        return $this->hasMany(GambarProperti::class);
    }

    public function permintaanInfos(): HasMany
    {
        return $this->hasMany(PermintaanInfo::class);
    }
}
