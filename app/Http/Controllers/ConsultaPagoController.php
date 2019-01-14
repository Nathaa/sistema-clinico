<?php

namespace App\Http\Controllers;

use App\ConsultasPagos;
use App\Cuentas;
use App\Expedientes;
use Illuminate\Http\Request;

class ConsultaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaspagos = ConsultasPagos::paginate();

        return view('consultaPagos.index', compact('consultaspagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expedientes = Expedientes::orderBy('name', 'asc')->get();

        return view('consultaPagos.create', compact('expedientes'));
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
        $consultaspagos = ConsultasPagos::create($request->all());

        return redirect()->route('consultaPagos.show', $consultaspagos->id)
        ->with('info', 'Consulta realizada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultasPagos $consultaspagos)
    {
        $montoTotal = 0;
        $cantidad = 0;
        $inicio = $consultaspagos->fechaInicio;
        $final = $consultaspagos->fechaFinal;
        $cuentas = Cuentas::whereBetween('fechaPago', [$inicio, $final])->get();

        foreach ($cuentas as $cuenta) {
            $montoTotal = $montoTotal + $cuenta->monto;
            $cantidad = $cantidad + 1;
        }

        return view('consultaPagos.show', compact('consultaspagos', 'cuentas', 'montoTotal', 'cantidad'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultasPagos $consultaspagos)
    {
        $consultaspagos->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
