<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'detail',
        'tanggal',
        'foto',
        'status',
        'pelapor_id',
    ];

    public function pelapor() : BelongsTo
    {
        return $this->belongsTo(User::class, 'pelapor_id');
    }
}
