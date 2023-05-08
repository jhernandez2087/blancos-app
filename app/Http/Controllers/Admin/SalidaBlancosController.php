<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalidaDeBlancosRequest;
use App\Models\Blanco;
use Illuminate\Http\Request;

class SalidaBlancosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blancos.salida');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function salida(SalidaDeBlancosRequest $request)
    {

        $serialnumber = $request->serialnumber;

        // Verificar si el número de serie existe en la base de datos
        $blanco = Blanco::where('serialnumber', $serialnumber)->first();

        if (!$blanco) {
            return redirect()->back()->withErrors(['error' => 'El número de serie "'.$serialnumber.'" no existe.']);
        }

        // Incrementar el campo numSalidas en 1
        $blanco->numSalidas += 1;
        $blanco->save();

        return redirect()->back()->with('success', 'Salida "'.$serialnumber.'" registrada exitosamente.');
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
