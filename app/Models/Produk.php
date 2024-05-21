<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillabel = ['nama','deskripsi','harga','image'];
    protected $visable = ['nama','deskripsi','harga','image'];
}
