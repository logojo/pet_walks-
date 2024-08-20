<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotasRequest;
use App\Models\Mascota;
use App\Models\PetWalk;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $mascotas = Mascota::get();

       return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MascotasRequest $request)
    {
        Mascota::create($request->all());
        return redirect('mascotas');
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
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascota = Mascota::find($id);
        $mascota->fill($request->all());
        $mascota->save();

        return redirect('mascotas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
       
        $exist = PetWalk::where('pet_id', $mascota->id)->first();

          if( !$exist )
              $mascota->delete();

        return redirect('mascotas');
    }
}
