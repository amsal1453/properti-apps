<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;
use Illuminate\Support\Str;

class Properti extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'nama_properti',
        'slug',
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($property) {
            if (!$property->slug) {
                $property->slug = Properti::generateUniqueSlug($property->nama_properti);
            }
        });

        static::updating(function ($property) {
            if ($property->isDirty('nama_properti') && !$property->isDirty('slug')) {
                $property->slug = Properti::generateUniqueSlug($property->nama_properti, $property->id);
            }
        });
    }

    public static function generateUniqueSlug($name, $ignoreId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 1;

        $query = static::where('slug', $slug);
        if ($ignoreId) {
            $query->where('id', '!=', $ignoreId);
        }

        while ($query->exists()) {
            $slug = $baseSlug . '-' . $counter++;
            $query = static::where('slug', $slug);
            if ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            }
        }

        return $slug;
    }

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
