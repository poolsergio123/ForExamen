<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClaseModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = ClaseModel::latest()->paginate(10);
        return view('clases.index', compact('clases'));
    }

    public function create()
    {
        return view('clases.create');
    }
    public function store(Request $request)
    {
        Log::info('Inicio del proceso de creación de una nueva clase.', [
            'request_data' => $request->all()
        ]);
        $request->validate([
            'ciclo' => 'required|integer',
            'carrera' => 'required|integer',
            'curso' => 'required|max:255',
            'nombre_clase' => 'required|max:255',
            'descripcion_clase' => 'required|max:255'
        ]);

        $evento = new ClaseModel();
        $evento->ciclo = $request->ciclo;
        $evento->carrera = $request->carrera;
        $evento->curso = $request->curso;
        $evento->nombre_clase= $request->nombre_clase;
        $evento->descripcion_clase= $request->descripcion_clase;
        $evento->save();



        return redirect()->route('clases.index')
            ->with('success', 'Clase creada exitosamente.');
    }

    public function edit(ClaseModel $clase)
    {
        return view('clases.edit', compact('clase'));
    }
    public function update(Request $request, ClaseModel $clase)
    {
        $request->validate([
            'ciclo' => 'required|integer',
            'carrera' => 'required|integer',
            'curso' => 'required|max:255',
            'nombre_clase' => 'required|max:255',
            'descripcion_clase' => 'required|max:255'
        ]);




        $clase->save();

        return redirect()->route('clases.index')
            ->with('success', 'Clase actualizado exitosamente.');
    }

    public function destroy(ClaseModel $clase)
    {
        // if ($evento->imagen) {
        //     Storage::delete('public/eventos/' . $evento->imagen);
        // }

        $clase->delete();

        return redirect()->route('clases.index')
            ->with('success', 'Clase eliminado exitosamente.');
    }
    public function show(ClaseModel $clase)
    {
        return view('clases.show', compact('clase'));
    }


    public function api_listado() {
        $clases = ClaseModel::latest()->get();
        return response()->json($clases);
    }
}
