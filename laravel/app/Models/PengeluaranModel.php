<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranModel extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran';

    protected $fillable = [
        'jumlah', 'keterangan', 'tanggal', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

