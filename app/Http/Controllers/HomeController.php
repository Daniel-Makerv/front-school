<?php

namespace App\Http\Controllers;

use App\Models\Tabs;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function rolesUsuario()
    {
        $authId = Auth::user()->id_rol_sistema;
        $rolesUsuario = Tabs::query()
            ->where('id_rol', $authId)
            ->get();
        return response()->json(['rolesUsuario' => $rolesUsuario]);
    }

    public function countAlumnos()
    {
        $estudiantes = Estudiante::query()
            ->get()
            ->count();
        return response()->json(['estudiantes' => $estudiantes]);
    }
}
