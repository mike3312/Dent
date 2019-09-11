<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable =['id','nombreproducto','cantidad','costo','precio_venta'];
}
