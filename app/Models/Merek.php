<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillabel = ['id','nama_merek'];
    protected $visable = ['id','nama_merek'];

    public function Merek()
    {
        return $this->hasMany(Merek::class, 'id_merek');
    }

}
