<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ["nombre", "precio", "stock", "categorias_id"];


    public function categorias(){
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }
}
