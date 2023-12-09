<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;

class ProveedorController extends Controller
{
    //
    public function mostrarProveedor(){
        //recuperar todos los empleados
        $proveedor = proveedor::all();
        return view('mostrarProveedores', compact ('proveedor'));
    }

    public function create(){
        return view('crearProveedor');
    }

    //crear proveedor
    public function crearProveedor(Request $request){
        $nvoProveedor = new empleado();
        $nvoProveedor->Idproveedor = $request->input('idproveedor');
        $nvoProveedor->nombre = $request->input('nombre');
        $nvoProveedor->fechaRegistro = $request->input('fechaRegistro');
        $nvoProveedor->telefono  = $request->input('telefono');
        $nvoProveedor->correo = $request->input('correo');
        
        $nvoProveedor->save();
        return redirect()->route('proveedor.mostrar');
    }
}
