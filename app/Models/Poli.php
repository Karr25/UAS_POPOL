<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_poli',
        'nama_poli',
        'jumlah',
    ];

    public function antrians(): HasMany{
        return $this->hasMany(Antrian::class, 'kode_poli', 'kode_poli');
    }
}
