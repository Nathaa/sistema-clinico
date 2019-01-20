<?php
namespace App\Http\Controllers;
use App\Citas;
use App\Expedientes;
use Illuminate\Http\Request;
use App\Http\Requests\citasRequest;
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$citas = Citas::orderBy('fechai_nicial', 'desc')->paginate();
        //$citas = Citas::orderBy('fechai_final', 'desc')->paginate();
        $citas = Citas::paginate();
        return view('citas.index', compact('citas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expedientes = Expedientes::orderBy('name', 'asc')->get();
        return view('citas.create', compact('expedientes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(citasRequest $request)
    {
        
       

        $cita = Citas::create($request->all());
        return redirect()->route('citas.index', $cita->id)
        ->with('info', 'Cita guardada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $cita)
    {
        return view('citas.show', compact('cita'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $cita)
    {
        $expedientes = Expedientes::get();
        return view('citas.edit', compact('cita', 'expedientes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $cita)
    {
        $cita->update($request->all());
        return redirect()->route('citas.edit', $cita->id)
        ->with('info', 'Cita guardada con exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * º@return \Illuminate\Http\Response
     */
    public function destroy(Citas $cita)
    {
        $cita->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
