<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Controlpago_cliente;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Controlpago_clienteController
 *
 * @author  The scaffold-interface created at 2016-06-25 02:05:41pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Controlpago_clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $controlpago_clientes = Controlpago_cliente::all();
        return view('controlpago_cliente.index',compact('controlpago_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('controlpago_cliente.create'
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

        $controlpago_cliente = new Controlpago_cliente();

        
        $controlpago_cliente->ci_representante = $input['ci_representante'];

        
        $controlpago_cliente->comprobante_pago = $input['comprobante_pago'];

        
        $controlpago_cliente->codigo_deposito = $input['codigo_deposito'];

        
        $controlpago_cliente->fecha_pago = $input['fecha_pago'];

        
        
        $controlpago_cliente->save();

        return redirect('controlpago_cliente');
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
            return URL::to('controlpago_cliente/'.$id);
        }

        $controlpago_cliente = Controlpago_cliente::findOrfail($id);
        return view('controlpago_cliente.show',compact('controlpago_cliente'));
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
            return URL::to('controlpago_cliente/'. $id . '/edit');
        }

        
        $controlpago_cliente = Controlpago_cliente::findOrfail($id);
        return view('controlpago_cliente.edit',compact('controlpago_cliente'
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

        $controlpago_cliente = Controlpago_cliente::findOrfail($id);
    	
        $controlpago_cliente->ci_representante = $input['ci_representante'];
        
        $controlpago_cliente->comprobante_pago = $input['comprobante_pago'];
        
        $controlpago_cliente->codigo_deposito = $input['codigo_deposito'];
        
        $controlpago_cliente->fecha_pago = $input['fecha_pago'];
        
        
        $controlpago_cliente->save();

        return redirect('controlpago_cliente');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/controlpago_cliente/'. $id . '/delete/');

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
     	$controlpago_cliente = Controlpago_cliente::findOrfail($id);
     	$controlpago_cliente->delete();
        return URL::to('controlpago_cliente');
    }
}
