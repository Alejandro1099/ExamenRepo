<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
    //
    public function mostrarProducto(){
        //recuperar todos los productos
        $productos = producto::all();
        return view('mostrarProducto', compact ('productos'));
    }

    public function create(){
        return view('crearProducto');
    }

    //crear producto
    public function crearProducto(Request $request){
        $nvoProducto = new producto();
        $nvoProducto->descripcion = $request->input('descripcion');
        $nvoProducto->precio = $request->input('precio');
        $nvoProducto->stock  = $request->input('stock');
        $nvoProducto->pagaIsv = $request->input('isv');
        
        $nvoProducto->save();
        return redirect()->route('producto.mostrar');
    }
}
