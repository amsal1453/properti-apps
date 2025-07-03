<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermintaanInfo extends Model
{
    use HasFactory;

    protected $fillable = ['properti_id', 'nama', 'email', 'nomor_telepon', 'subjek', 'pesan', 'status'];

    public function properti(): BelongsTo
    {
        return $this->belongsTo(Properti::class);
    }
}
