<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
      $datos_products = array('products'=> $products);
      return view('welcome',$datos_products);
    }

    public function show($id){
      $detalle = Product::find($id);
      $producto_detalle = array('detalles'=>$detalle);
      return view('detalle',$producto_detalle);
    }

    public function edit($id){
      $editar = Product::find($id);
  		$datos_editar = array('editar'=>$editar);
  		return view('editar',$datos_editar);
    }

}
