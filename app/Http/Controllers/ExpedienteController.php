<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Cuentas;
use App\Expedientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\expedientesRequest;

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
    public function store(expedientesRequest $request)
    {
        $expediente = Expedientes::create($request->all());

        if ($request->hasfile('avatar')) {
            $expediente->avatar = $request->file('avatar')->store('public');
        }
        $expediente->save();

        return redirect()->route('expedientes.index', compact('expediente'))
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
        $cont = 0;
        $idExpediente = $expediente->id;
        $nombrePaciente = $expediente->name;
        $citas = Citas::where('expediente_id', $idExpediente)->get();

        foreach ($citas as $cita) {
            $cont = $cont + 1;
        }

        return view('expedientes.showCitas', compact('citas', 'cont', 'nombrePaciente'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function postNewImage(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image',
        ]);
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
        $montoTotal = 0;
        $cantidad = 0;
        $idExpediente = $expediente->id;
        $nombrePaciente = $expediente->name;
        $cuentas = Cuentas::where('expediente_id', $idExpediente)->get();

        foreach ($cuentas as $cuenta) {
            $montoTotal = $montoTotal + $cuenta->monto;
            $cantidad = $cantidad + 1;
        }

        return view('expedientes.showCuentas', compact('cuentas', 'montoTotal', 'cantidad', 'nombrePaciente'));
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
        $arraySexo = array('Masculino', 'Femenino');

        return view('expedientes.edit', compact('expediente', 'arraySexo'));
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
        if ($request->hasfile('avatar')) {
            $expediente->avatar = $request->file('avatar')->store('public');
        }
        $expediente->update($request->only('name','nacimiento','edad',
        'dirreccion', 'telefono', 'sexo', 'ocupacion', 'tratamiento', 'diagnostico', 'alergias'));

        return redirect()->route('expedientes.edit', compact('expediente'))
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
