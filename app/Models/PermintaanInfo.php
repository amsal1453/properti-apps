<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermintaanInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'pesan',
        'status',
        'tanggal_kirim',
        'properti_id'
    ];

    public function properti(): BelongsTo
    {
        return $this->belongsTo(Properti::class, 'properti_id');
    }
}
