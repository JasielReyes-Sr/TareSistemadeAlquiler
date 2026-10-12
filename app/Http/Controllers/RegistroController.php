<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registro::all();

        dd($registros);
    }

    public function cliente($id)
    {
        $registro = Registro::findOrFail($id);

        $cliente = $registro->cliente;

        dd($cliente);
    }

    public function empleado($id)
    {
        $registro = Registro::findOrFail($id);

        $empleado = $registro->empleado;

        dd($empleado);
    }

    public function alquileres($id)
    {
        $registro = Registro::findOrFail($id);

        $alquileres = $registro->alquileres;

        dd($alquileres);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
