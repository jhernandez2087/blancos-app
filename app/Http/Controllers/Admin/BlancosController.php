<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroDeBlancosRequest;
use App\Models\Blanco;
use App\Models\Categoria;
use App\Models\Color;
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

        // Obtener los datos del formulario
        $categoria = $request->input('categoria');
        $color = $request->input('color');
        $tamaño = $request->input('tamano');

        // Obtener las abreviaturas de la categoría, color y tamaño desde la base de datos
        $categoriaAbreviatura = Categoria::where('nombre', $categoria)->value('abreviatura');
        $colorAbreviatura = Color::where('nombre', $color)->value('abreviatura');

        // Insertar los datos en la base de datos
        $blanco = new Blanco();
        $blanco->categoria = $categoria;
        $blanco->color = $color;
        $blanco->tamano = $tamaño;
        $blanco->status = 1;
        $blanco->numEntradas = 0;
        $blanco->numSalidas = 0;
        $blanco->save();

        // Obtener el ID del registro creado
        $id = $blanco->id;

        // Generar el número de serie
        $serialNumber = strtoupper($categoriaAbreviatura . $tamaño . $colorAbreviatura . str_pad($id, 5, '0', STR_PAD_LEFT));

        // Actualizar el número de serie del registro
        $blanco->serialNumber = $serialNumber;
        $blanco->save();

        return redirect()->back()->with('success', 'El registro se ha guardado exitosamente con el SN: ' . $serialNumber);
    }
    

    public function entrada()
    {
        return view('admin.blancos.entrada');
    }

    public function listado()
    {
        return view('admin.blancos.listado');
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
