<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;

class Properti extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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
        'is_promo'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gambar_properti');
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb')
            ->fit(Fit::Crop, 300, 200)
            ->nonQueued();
    }

    public function permintaanInfos(): HasMany
    {
        return $this->hasMany(PermintaanInfo::class);
    }
}
