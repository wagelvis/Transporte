<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Registro_cliente;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Registro_clienteController
 *
 * @author  The scaffold-interface created at 2016-06-25 03:49:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Registro_clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $registro_clientes = Registro_cliente::all();
        return view('registro_cliente.index',compact('registro_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('registro_cliente.create'
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

        $registro_cliente = new Registro_cliente();

        
        $registro_cliente->nombre_usuario = $input['nombre_usuario'];

        
        $registro_cliente->email_usuario = $input['email_usuario'];

        
        $registro_cliente->telefono_usuario = $input['telefono_usuario'];

        
        $registro_cliente->contrasena = $input['contrasena'];

        
        $registro_cliente->confirmacion_contrasena = $input['confirmacion_contrasena'];

        
        $registro_cliente->pregunta_seguridad_usuario = $input['pregunta_seguridad_usuario'];

        
        $registro_cliente->fecha_registro = $input['fecha_registro'];

        
        $registro_cliente->id_usuario = $input['id_usuario'];

        
        
        $registro_cliente->save();

        return redirect('registro_cliente');
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
            return URL::to('registro_cliente/'.$id);
        }

        $registro_cliente = Registro_cliente::findOrfail($id);
        return view('registro_cliente.show',compact('registro_cliente'));
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
            return URL::to('registro_cliente/'. $id . '/edit');
        }

        
        $registro_cliente = Registro_cliente::findOrfail($id);
        return view('registro_cliente.edit',compact('registro_cliente'
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

        $registro_cliente = Registro_cliente::findOrfail($id);
    	
        $registro_cliente->nombre_usuario = $input['nombre_usuario'];
        
        $registro_cliente->email_usuario = $input['email_usuario'];
        
        $registro_cliente->telefono_usuario = $input['telefono_usuario'];
        
        $registro_cliente->contrasena = $input['contrasena'];
        
        $registro_cliente->confirmacion_contrasena = $input['confirmacion_contrasena'];
        
        $registro_cliente->pregunta_seguridad_usuario = $input['pregunta_seguridad_usuario'];
        
        $registro_cliente->fecha_registro = $input['fecha_registro'];
        
        $registro_cliente->id_usuario = $input['id_usuario'];
        
        
        $registro_cliente->save();

        return redirect('registro_cliente');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/registro_cliente/'. $id . '/delete/');

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
     	$registro_cliente = Registro_cliente::findOrfail($id);
     	$registro_cliente->delete();
        return URL::to('registro_cliente');
    }
}
