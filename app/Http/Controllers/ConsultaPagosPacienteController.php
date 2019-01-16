<?php

namespace App\Http\Controllers;

use App\ConsultaPagosPaciente;
use App\Cuentas;
use App\Expedientes;
use Illuminate\Http\Request;
use App\Http\Requests\consultapagospacienteRequest;

class ConsultaPagosPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaspagospacientes = ConsultaPagosPaciente::paginate();
        $expedientes = Expedientes::get();

        return view('consultaPagoPacientes.index', compact('consultaspagospacientes', 'expedientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(consultapagospacienteRequest $request)
    {
        $consultaspagospaciente = ConsultaPagosPaciente::create($request->all());

        return redirect()->route('consultaPagoPacientes.show', $consultaspagospaciente->id)
        ->with('info', 'Consulta realizada con éxito');
    }

    public function show(ConsultaPagosPaciente $consultaspagospaciente)
    {
        $montoTotal = 0;
        $cantidad = 0;
        $idExpediente = $consultaspagospaciente->expediente_id;
        $cuentas = Cuentas::where('expediente_id', $idExpediente)->get();

        foreach ($cuentas as $cuenta) {
            $montoTotal = $montoTotal + $cuenta->monto;
            $cantidad = $cantidad + 1;
        }

        return view('consultaPagoPacientes.show', compact('cuentas', 'montoTotal', 'cantidad'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultaPagosPaciente $consultaspagospaciente)
    {
        $consultaspagospaciente->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
