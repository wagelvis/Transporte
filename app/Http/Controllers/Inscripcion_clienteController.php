<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Inscripcion_cliente;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Inscripcion_clienteController
 *
 * @author  The scaffold-interface created at 2016-06-25 03:37:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Inscripcion_clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcion_clientes = Inscripcion_cliente::all();
        return view('inscripcion_cliente.index',compact('inscripcion_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('inscripcion_cliente.create'
                );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::except('_token');

        $inscripcion_cliente = new Inscripcion_cliente();

        
        $inscripcion_cliente->nombre_estudiante = $input['nombre_estudiante'];

        
        $inscripcion_cliente->apellido_estudiante = $input['apellido_estudiante'];

        
        $inscripcion_cliente->sector_ruta = $input['sector_ruta'];

        
        $inscripcion_cliente->calle_ruta = $input['calle_ruta'];

        
        $inscripcion_cliente->casa_ruta = $input['casa_ruta'];

        
        $inscripcion_cliente->colegio_estudiante = $input['colegio_estudiante'];

        
        $inscripcion_cliente->grado_estudiante = $input['grado_estudiante'];

        
        $inscripcion_cliente->seccion_estudiante = $input['seccion_estudiante'];

        
        $inscripcion_cliente->telefono_estudiante = $input['telefono_estudiante'];

        
        $inscripcion_cliente->nombre_representante = $input['nombre_representante'];

        
        $inscripcion_cliente->apellido_representante = $input['apellido_representante'];

        
        $inscripcion_cliente->ci_representante = $input['ci_representante'];

        
        $inscripcion_cliente->id_usuario = $input['id_usuario'];

        
        $inscripcion_cliente->telefono_representante = $input['telefono_representante'];

        
        $inscripcion_cliente->fecha_inscripcion = $input['fecha_inscripcion'];

        
        $inscripcion_cliente->contrato_inscripcion = $input['contrato_inscripcion'];

        
        
        $inscripcion_cliente->save();

        return redirect('inscripcion_cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('inscripcion_cliente/'.$id);
        }

        $inscripcion_cliente = Inscripcion_cliente::findOrfail($id);
        return view('inscripcion_cliente.show',compact('inscripcion_cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Request::ajax())
        {
            return URL::to('inscripcion_cliente/'. $id . '/edit');
        }

        
        $inscripcion_cliente = Inscripcion_cliente::findOrfail($id);
        return view('inscripcion_cliente.edit',compact('inscripcion_cliente'
                )
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id)
    {
        $input = Request::except('_token');

        $inscripcion_cliente = Inscripcion_cliente::findOrfail($id);
    	
        $inscripcion_cliente->nombre_estudiante = $input['nombre_estudiante'];
        
        $inscripcion_cliente->apellido_estudiante = $input['apellido_estudiante'];
        
        $inscripcion_cliente->sector_ruta = $input['sector_ruta'];
        
        $inscripcion_cliente->calle_ruta = $input['calle_ruta'];
        
        $inscripcion_cliente->casa_ruta = $input['casa_ruta'];
        
        $inscripcion_cliente->colegio_estudiante = $input['colegio_estudiante'];
        
        $inscripcion_cliente->grado_estudiante = $input['grado_estudiante'];
        
        $inscripcion_cliente->seccion_estudiante = $input['seccion_estudiante'];
        
        $inscripcion_cliente->telefono_estudiante = $input['telefono_estudiante'];
        
        $inscripcion_cliente->nombre_representante = $input['nombre_representante'];
        
        $inscripcion_cliente->apellido_representante = $input['apellido_representante'];
        
        $inscripcion_cliente->ci_representante = $input['ci_representante'];
        
        $inscripcion_cliente->id_usuario = $input['id_usuario'];
        
        $inscripcion_cliente->telefono_representante = $input['telefono_representante'];
        
        $inscripcion_cliente->fecha_inscripcion = $input['fecha_inscripcion'];
        
        $inscripcion_cliente->contrato_inscripcion = $input['contrato_inscripcion'];
        
        
        $inscripcion_cliente->save();

        return redirect('inscripcion_cliente');
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/inscripcion_cliente/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$inscripcion_cliente = Inscripcion_cliente::findOrfail($id);
     	$inscripcion_cliente->delete();
        return URL::to('inscripcion_cliente');
    }
}
