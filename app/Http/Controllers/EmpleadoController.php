<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;

class EmpleadoController extends Controller
{
    //
    public function mostrarEmpleados(){
        //recuperar todos los empleados
        $empleados = empleado::all();
        return view('mostrarEmpleados', compact ('empleados'));
    }

    public function create(){
        return view('crearEmpleado');
    }

    //crear empleado
    public function crearEmpleado(Request $request){
        $nvoEmpleado = new empleado();
        $nvoEmpleado->Idprestamo = $request->input('idEmpleado');
        $nvoEmpleado->nombre = $request->input('nombre');
        $nvoEmpleado->apellido = $request->input('apellido');
        $nvoEmpleado->fechaIngreso  = $request->input('fechaIngreso');
        $nvoEmpleado->salario = $request->input('salario');
        
        $nvoEmpleado->save();
        return redirect()->route('empleado.mostrar');
    }
}
