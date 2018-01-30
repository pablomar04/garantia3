<?php

namespace Garantia3\Http\Controllers;

use Garantia3\Orden;
use Illuminate\Http\Request;
use Garantia3\Http\Requests\OrdenCreateRequest;
use Garantia3\Http\Requests\OrdenUpdateRequest;
use Session;
use Redirect;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $ordens = Orden::orderBy('created_at', 'desc')->paginate(10);
        return view('orden.index',compact('ordens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orden.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdenCreateRequest $request)
    {

            Orden::create([
            'numero'=>$request['numero'],
            'sucursal'=>$request['sucursal'],
            'chasis'=>$request['chasis'],
            'apertura'=>$request['apertura'],
            'cierre'=>$request['cierre'],
            'retiro'=>$request['retiro'],
            'estado'=>$request['estado'],
            'observaciones'=>$request['observaciones'],          
            ]);
            return redirect('/orden')->with('message','Orden creada correctamente');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \Garantia3\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Garantia3\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orden = Orden::find($id);
        return view('orden.edit',['orden'=>$orden]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Garantia3\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(OrdenUpdateRequest $request, $id)
    {
        $orden = Orden::find($id);
        $orden->fill($request->all());
        $orden->save();
        Session::flash('message','Orden editada correctamente');
        return Redirect::to('/orden');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Garantia3\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden = Orden::find($id);
        $user->delete();
        Session::flash('message','Orden eliminada correctamente');
        return Redirect::to('/orden'); 
    }
}
