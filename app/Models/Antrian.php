<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antrian extends Model{
    use HasFactory;

    protected $fillable = [
        'no_antrian',
        'pasien_id',
        'kode_poli',
        'status',
    ];

    public function pasien():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function poli():BelongsTo{
        return $this->belongsTo(Poli::class, 'kode_poli', 'kode_poli');
    }
}
