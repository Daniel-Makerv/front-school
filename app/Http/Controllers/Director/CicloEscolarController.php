<?php

namespace App\Http\Controllers\Director;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CicloEscolar;

class CicloEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cicloEscolar = CicloEscolar::query()
          ->get();
        return view('director.ciclo-escolar')->with(compact(['cicloEscolar']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $datosCicloEscolar = request()->except(['_token', '_method']);
       CicloEscolar::where('id','=',$id)->update($datosCicloEscolar);
       $ciclo_escolar = CicloEscolar::findOrFail($id);
       $datos['ciclo_escolar']=CicloEscolar::all();
       $consulta['ciclo_escolar'] = CicloEscolar::withTrashed()
       ->select(
         'ciclo_escolar.id',
         'ciclo_escolar.inicio_ciclo',
         'ciclo_escolar.fin_ciclo')->get();
        return view('director.ciclo-escolar')->with($datos)->with($consulta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
