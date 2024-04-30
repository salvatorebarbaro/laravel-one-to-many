<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Types = Type::all();

            // dd($projects);


            return view('types.index', compact('Types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
         //restituisce i dati che l'utente ha inserito se sono giusti ??
        //  $request->validated();
         // Creazione di un nuovo progetto
         $Newtype = new Type();

         // abbiamo riempito i campi del progetto con gli elementi salvati nel model $fillable
         $Newtype->fill($request->all());
        //abbiamo salvato
        $Newtype-> save();

        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTypeRequest $request, Type $type)
    {
        $request->validated();
        $type->update($request->all());
        $type->save();

        return redirect()->route('admin.types.show', $type->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
