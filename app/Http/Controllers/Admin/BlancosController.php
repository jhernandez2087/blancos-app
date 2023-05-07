<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroDeBlancosRequest;
use App\Models\Blanco;
use Illuminate\Http\Request;

class BlancosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.blancos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registro()
    {
        return view('admin.blancos.registro');
    }

    public function enviarRegistro(RegistroDeBlancosRequest $request)
    {
        $blanco = new Blanco();
        $blanco->categoria = $request->input('categoria');
        $blanco->color = $request->input('color');
        $blanco->tamaño = $request->input('tamaño');
        $blanco->status = $request->input('status');
        $blanco->save();
        
        return redirect()->back()->with('success', 'El registro se ha guardado exitosamente.');
    }

    public function entrada()
    {
        return view('admin.blancos.entrada');
    }

    public function salida()
    {
        return view('admin.blancos.salida');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
