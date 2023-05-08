<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::query()->get();
        $sectors = Sector::query()->get();
        return view('sector.index')->with([
            'evaluations' => $evaluations,
            'sectors' => $sectors
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evaluations = Evaluation::query()->get();
        $sectors = Sector::query()->get();
        $successMessage = session('success.message');
        return view('sector.create')->with([
            'evaluations' => $evaluations,
            'sectors' => $sectors
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sector' => ['required', 'min:1', 'unique:sectors']
            ]);
        Sector::create($request->all());
        $request->session()->flash('success.message', 'Formulário enviado com Sucesso!!');
        return to_route('sector.index')->with('success.message');
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
