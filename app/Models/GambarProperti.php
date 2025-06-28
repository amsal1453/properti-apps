<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GambarProperti extends Model
{
    protected $table = 'gambar_propertis';

    protected $fillable = ['properti_id', 'file_path', 'keterangan'];

    public function properti(): BelongsTo
    {
        return $this->belongsTo(Properti::class);
    }
}
