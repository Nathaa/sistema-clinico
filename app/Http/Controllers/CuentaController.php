<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Cuentas;
use App\Expedientes;
use Illuminate\Http\Request;
use App\Http\Requests\cuentaRequest;

class cuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuentas::paginate();

        return view('cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citas = Citas::get();
        $expedientes = Expedientes::orderBy('name', 'asc')->get();
        $arrayTratamientos = array('Consulta', 'Limpieza dental', 'Extracción de piezas', 'Endodoncia',
        'Ortodoncia', 'Prótesis', 'Implantes', 'Otro', );

        return view('cuentas.create', compact('citas', 'expedientes', 'arrayTratamientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(cuentaRequest $request)
    {
        $cuenta = Cuentas::create($request->all());

        return redirect()->route('cuentas.index', $cuenta->id)
        ->with('info', 'cuenta guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Cuentas $cuenta)
    {
        return view('cuentas.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuentas $cuenta)
    {
        $citas = Citas::get();
        $expedientes = Expedientes::get();
        $arrayTratamientos = array('Consulta', 'Limpieza dental', 'Extracción de piezas', 'Endodoncia',
        'Ortodoncia', 'Prótesis', 'Implantes', 'Otro', );

        return view('cuentas.edit', compact('cuenta', 'citas', 'expedientes', 'arrayTratamientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuentas $cuenta)
    {
        $cuenta->update($request->all());

        return redirect()->route('cuentas.edit', $cuenta->id)
        ->with('info', 'cuenta guardada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuentas $cuenta)
    {
        $cuenta->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
