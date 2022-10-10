<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model{
    public function cake() {
        return $this->hasMany(Cake::class);
    }
    
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = ['id', 'namakue', 'bahan', 'harga'];
}
