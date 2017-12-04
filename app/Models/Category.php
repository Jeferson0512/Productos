<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';

// Atributos que se pueden asignar de manera masiva.
 protected $fillable = array('nombre','estado','imagen');

// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
protected $hidden = ['created_at','updated_at'];

// Relación de Catalogo con Productos:
public function productos(){
  // 1 catalgo pertenece a muchos Productos.
  return $this->hasMany('App\Models\Product');
}
}
