<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Cotizaciones_transportista;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Cotizaciones_transportistaController
 *
 * @author  The scaffold-interface created at 2016-06-25 03:04:27pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Cotizaciones_transportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones_transportistas = Cotizaciones_transportista::all();
        return view('cotizaciones_transportista.index',compact('cotizaciones_transportistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cotizaciones_transportista.create'
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

        $cotizaciones_transportista = new Cotizaciones_transportista();

        
        $cotizaciones_transportista->id_transportista = $input['id_transportista'];

        
        $cotizaciones_transportista->comprobante_pago = $input['comprobante_pago'];

        
        $cotizaciones_transportista->codigo_deposito = $input['codigo_deposito'];

        
        $cotizaciones_transportista->fecha_pago = $input['fecha_pago'];

        
        
        $cotizaciones_transportista->save();

        return redirect('cotizaciones_transportista');
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
            return URL::to('cotizaciones_transportista/'.$id);
        }

        $cotizaciones_transportista = Cotizaciones_transportista::findOrfail($id);
        return view('cotizaciones_transportista.show',compact('cotizaciones_transportista'));
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
            return URL::to('cotizaciones_transportista/'. $id . '/edit');
        }

        
        $cotizaciones_transportista = Cotizaciones_transportista::findOrfail($id);
        return view('cotizaciones_transportista.edit',compact('cotizaciones_transportista'
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

        $cotizaciones_transportista = Cotizaciones_transportista::findOrfail($id);
    	
        $cotizaciones_transportista->id_transportista = $input['id_transportista'];
        
        $cotizaciones_transportista->comprobante_pago = $input['comprobante_pago'];
        
        $cotizaciones_transportista->codigo_deposito = $input['codigo_deposito'];
        
        $cotizaciones_transportista->fecha_pago = $input['fecha_pago'];
        
        
        $cotizaciones_transportista->save();

        return redirect('cotizaciones_transportista');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/cotizaciones_transportista/'. $id . '/delete/');

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
     	$cotizaciones_transportista = Cotizaciones_transportista::findOrfail($id);
     	$cotizaciones_transportista->delete();
        return URL::to('cotizaciones_transportista');
    }
}
