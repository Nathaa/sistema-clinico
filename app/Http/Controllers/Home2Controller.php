<?php

namespace App\Http\Controllers;

use App\Citas;
use Illuminate\Support\Facades\Request;

class Home2Controller extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_events()
    {
        $events = Citas::select('id', 'descripcion as title', 'fechai_nicio as start', 'fecha_final as end', 'color')->get()->toArray();

        return response::json($events);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create_events(Request $request)
    {
        $input = Request::all();
        
        $input['fechai_nicio'] = $input['fechai_nicio'].''.date('H:m:s', strtotime($input['hora_inicio']));
        $input['fecha_final'] = $input['fecha_final'].''.date('H:m:s', strtotime($input['hora_final']));
        $input['color'] = 'FF0000';
        Citas::create($input);
     
        return redirect('home2');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home2');
    }


    
}
