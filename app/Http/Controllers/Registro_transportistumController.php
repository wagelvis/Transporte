<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Registro_transportistum;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Registro_transportistumController
 *
 * @author  The scaffold-interface created at 2016-06-25 04:02:05pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Registro_transportistumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $registro_transportistas = Registro_transportistum::all();
        return view('registro_transportistum.index',compact('registro_transportistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('registro_transportistum.create'
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

        $registro_transportistum = new Registro_transportistum();

        
        $registro_transportistum->nombre_transportista = $input['nombre_transportista'];

        
        $registro_transportistum->apellido_transportista = $input['apellido_transportista'];


        $registro_transportistum->contrasena_transportista = $input['contrasena_transportista'];

        
        $registro_transportistum->confirmacion_contrasena = $input['confirmacion_contrasena'];

        
        $registro_transportistum->pregunta_seguridad = $input['pregunta_seguridad'];

        
        $registro_transportistum->sector_ruta = $input['sector_ruta'];

        
        $registro_transportistum->colegios_ruta = $input['colegios_ruta'];

        
        $registro_transportistum->fecha_registro = $input['fecha_registro'];


        $registro_transportistum->save();

        return redirect('registro_transportistum');
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
            return URL::to('registro_transportistum/'.$id);
        }

        $registro_transportistum = Registro_transportistum::findOrfail($id);
        return view('registro_transportistum.show',compact('registro_transportistum'));
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
            return URL::to('registro_transportistum/'. $id . '/edit');
        }

        
        $registro_transportistum = Registro_transportistum::findOrfail($id);
        return view('registro_transportistum.edit',compact('registro_transportistum'
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

        $registro_transportistum = Registro_transportistum::findOrfail($id);
    	
        $registro_transportistum->nombre_transportista = $input['nombre_transportista'];
        
        $registro_transportistum->apellido_transportista = $input['apellido_transportista'];
        
        $registro_transportistum->contrasena_transportista = $input['contrasena_transportista'];
        
        $registro_transportistum->confirmacion_contrasena = $input['confirmacion_contrasena'];
        
        $registro_transportistum->pregunta_seguridad = $input['pregunta_seguridad'];
        
        $registro_transportistum->sector_ruta = $input['sector_ruta'];
        
        $registro_transportistum->colegios_ruta = $input['colegios_ruta'];

        $registro_transportistum->fecha_registro = $input['fecha_registro'];
        
        $registro_transportistum->save();

        return redirect('registro_transportistum');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/registro_transportistum/'. $id . '/delete/');

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
     	$registro_transportistum = Registro_transportistum::findOrfail($id);
     	$registro_transportistum->delete();
        return URL::to('registro_transportistum');
    }
}
