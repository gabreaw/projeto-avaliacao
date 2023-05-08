<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectorStorePostRequest;
use App\Models\Evaluation;
use App\Models\Sector;
use Illuminate\Http\RedirectResponse;
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
    public function store(SectorStorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Sector::create($request->all());
        return to_route('sector.index');
    }
}
