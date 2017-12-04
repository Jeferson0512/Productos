<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\Category;

class Product extends Model
{
  protected $table = 'products';
  // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
  protected $hidden = ['created_at','updated_at'];

  // Relación de Catalogo con Productos:
  public function category(){
    // 1 catalgo pertenece a muchos Productos.
    return $this->belongsTo('App\Models\Category');
  }
}
