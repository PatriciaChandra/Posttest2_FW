<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    public function menu() {
        return $this->belongsTo(Menu::class);
    }
    use HasFactory;

    protected $table = 'cakes';
    protected $fillabel = ['id','tipe_cake','banyak_layer','ukuran_cake','jumlah_lilin','pesan_pada_cake'];
}
