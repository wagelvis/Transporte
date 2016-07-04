<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Mensualidades_transportista;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Mensualidades_transportistaController
 *
 * @author  The scaffold-interface created at 2016-06-25 03:41:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Mensualidades_transportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $mensualidades_transportistas = Mensualidades_transportista::all();
        return view('mensualidades_transportista.index',compact('mensualidades_transportistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('mensualidades_transportista.create'
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

        $mensualidades_transportista = new Mensualidades_transportista();

        
        $mensualidades_transportista->id_transportista = $input['id_transportista'];

        
        $mensualidades_transportista->comprobante_pago = $input['comprobante_pago'];

        
        $mensualidades_transportista->codigo_deposito = $input['codigo_deposito'];

        
        $mensualidades_transportista->fecha_pago = $input['fecha_pago'];
        
        
        $mensualidades_transportista->save();

        return redirect('mensualidades_transportista');
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
            return URL::to('mensualidades_transportista/'.$id);
        }

        $mensualidades_transportista = Mensualidades_transportista::findOrfail($id);
        return view('mensualidades_transportista.show',compact('mensualidades_transportista'));
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
            return URL::to('mensualidades_transportista/'. $id . '/edit');
        }

        
        $mensualidades_transportista = Mensualidades_transportista::findOrfail($id);
        return view('mensualidades_transportista.edit',compact('mensualidades_transportista'
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

        $mensualidades_transportista = Mensualidades_transportista::findOrfail($id);
    	
        $mensualidades_transportista->id_transportista = $input['id_transportista'];
        
        $mensualidades_transportista->comprobante_pago = $input['comprobante_pago'];
        
        $mensualidades_transportista->codigo_deposito = $input['codigo_deposito'];
        
        $mensualidades_transportista->fecha_pago = $input['fecha_pago'];
        
        
        $mensualidades_transportista->save();

        return redirect('mensualidades_transportista');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/mensualidades_transportista/'. $id . '/delete/');

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
     	$mensualidades_transportista = Mensualidades_transportista::findOrfail($id);
     	$mensualidades_transportista->delete();
        return URL::to('mensualidades_transportista');
    }
}
