<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Cuentas;
use App\Expedientes;
use Illuminate\Http\Request;

class expedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expedientes::paginate();

        return view('expedientes.index', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arraySexo = array('Masculino', 'Femenino');

        return view('expedientes.create', compact('arraySexo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expediente = Expedientes::create($request->all());

        return redirect()->route('expedientes.edit', $expediente->id)
        ->with('info', 'expediente guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Expedientes $expediente)
    {
        $citas = Citas::get();
        $cuentas = Cuentas::get();

        return view('expedientes.show', compact('expediente'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function showCitas(Expedientes $expediente)
    {
        $idExpediente = $expediente->id;
        $citas = Citas::where('expediente_id', $idExpediente)->get();

        return view('expedientes.showCitas', compact('citas'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function showCuentas(Expedientes $expediente)
    {
        $idExpediente = $expediente->id;
        $cuentas = Cuentas::where('expediente_id', $idExpediente)->get();

        return view('expedientes.showCuentas', compact('cuentas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Expedientes $expediente)
    {
        return view('expedientes.edit', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedientes $expediente)
    {
        $expediente->update($request->all());

        return redirect()->route('expedientes.edit', $expediente->id)
        ->with('info', 'expediente guardado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedientes $expediente)
    {
        $expediente->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
