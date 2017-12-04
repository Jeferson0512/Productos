<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
  public function index(){
    $categories = Category::all();
    $dato_category = array('categories'=> $categories);
    return $dato_category;
  }

  public function show($id){
          $medico = Category::find($id);
          $usuario = $medico ->productos;
          return response()->json(['datos'=>$medico],202);
        }
}
