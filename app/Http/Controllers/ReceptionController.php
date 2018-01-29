<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reception;
use App\Technical;
use App\Client;
use Carbon\Carbon;
use App\Http\Requests\ReceptionRequest;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$receptionsv = Reception::get();
        $clientsv = Client::get();
        $technicalsv = Technical::get();*/
        $now = Carbon::now();              
        $receptions =  Reception::orderBy('id', 'DESC')->paginate();       

        return view('receptions.index', compact('receptions','now'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receptions = Reception::all();        
        $technicals = Technical::all();

        return view('receptions.create', compact('receptions','technicals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceptionRequest $request)
    {
        $reception = new Reception;

        $reception->technical_id = $request->technical_id;       
        $reception->nombre_cliente = $request->nombre_cliente;
        $reception->telefono = $request->telefono;
        $reception->fecharecepcion = $request->fecharecepcion;
        $reception->problema = $request->problema;
        $reception->equipo = $request->equipo;
        $reception->observacion = $request->observacion;
        $reception->estado = $request->estado;

        $reception->save();

        return redirect()->route('recepcion.index')->with('info', 'Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reception = Reception::find($id);
        return view('receptions.show', compact('reception'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reception = Reception::find($id);
        $technicals = Technical::all();

        return view('receptions.edit', compact('reception','technicals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReceptionRequest $request, $id)
    {
        $reception = Reception::find($id);

        $reception->technical_id = $request->technical_id;       
        $reception->nombre_cliente = $request->nombre_cliente;
        $reception->telefono = $request->telefono;
        $reception->fecharecepcion = $request->fecharecepcion;
        $reception->problema = $request->problema;
        $reception->equipo = $request->equipo;
        $reception->observacion = $request->observacion;
        $reception->estado = $request->estado;

        $reception->save();

        return redirect()->route('recepcion.index')->with('info', 'El archivo fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reception = Reception::find($id);
        $reception->delete();
        return back()->with('info', 'El archivo fue Eliminado correctamente');
    }
}
