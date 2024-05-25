<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillabel = ['id','nama_barang','harga','stok','id_merek'];
    protected $visable = ['id','nama_barang','harga','stok','id_merek'];

    public function Merek()

    {
        return $this->belongsTo(Merek::class, 'id_merek');
    }
}
