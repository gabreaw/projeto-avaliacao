<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $evaluations = Evaluation::query()->get();
        $sectors = Sector::query()->get();
        $successMessage = session('success.message');

        return view('evaluation.index')->with([
            'evaluations' => $evaluations,
            'sectors' => $sectors
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $successMessage = session('success.message');
        $request->session()->flash('success.message', 'Formulário enviado com Súcesso!!');
        $evaluations = Evaluation::query()->get();
        $sectors = Sector::query()->get();


        $successMessage = session('success.message');
        return view('evaluation.create')->with([
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
            'name' => ['required', 'min:1', 'unique:evaluations'],
            'score_work' => ['required', 'min:0', 'max:100'],
            'justification_work' => ['min:0'],
            'score_proactivity' => ['required', 'min:0', 'max:100'],
            'justification_proactivity' => ['min:0'],
            'score_responsibility' => ['required', 'min:0', 'max:100'],
            'justification_responsibility' => ['min:0'],
            'score_creative' => ['required', 'min:0', 'max:100'],
            'justification_creative' => ['min:0'],
            'score_communication' => ['required', 'min:0', 'max:100'],
            'justification_communication' => ['min:0'],
            'score_punctuality' => ['required', 'min:0', 'max:100'],
            'justification_punctuality' => ['min:0'],
            'score_behavior' => ['required', 'min:0', 'max:100'],
            'justification_behavior' => ['min:0'],
            'score_technique' => ['required', 'min:0', 'max:100'],
            'justification_technique' => ['min:0'],
            'score_improvement' => ['required', 'min:0', 'max:100'],
            'justification_improvement' => ['min:0'],
            'score_leader' => ['required', 'min:0', 'max:100'],
            'justification_leader' => ['required', 'min:1']
        ]);

        $sector = Sector::find($request->sector_id);
        if ($sector) {
            $evaluation = $sector->evaluations()->create([
                'name' => $request->name,
                'score_work' => $request->score_work,
                'justification_work' => $request->justification_work,
                'score_proactivity' => $request->score_proactivity,
                'justification_proactivity' => $request->justification_proactivity,
                'score_responsibility' => $request->score_responsibility,
                'justification_responsibility' => $request->justification_responsibility,
                'score_creative' => $request->score_creative,
                'justification_creative' => $request->justification_creative,
                'score_communication' => $request->score_communication,
                'justification_communication' => $request->justification_communication,
                'score_punctuality' => $request->score_punctuality,
                'justification_punctuality' => $request->justification_punctuality,
                'score_behavior' => $request->score_behavior,
                'justification_behavior' => $request->justification_behavior,
                'score_technique' => $request->score_technique,
                'justification_technique' => $request->justification_technique,
                'score_improvement' => $request->score_improvement,
                'justification_improvement' => $request->justification_improvement,
                'score_leader' => $request->score_leader,
                'justification_leader' => $request->justification_leader
            ]);

            if ($evaluation) {
                $request->session()->flash('successMessage', 'Formulário enviado com sucesso!');
                return redirect()->route('evaluation.index')->with('successMessage');
            }
        }

        $request->session()->flash('errorMessage', 'Erro ao enviar o formulário.');
        return redirect()->back()->with('errorMessage');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evaluations = Evaluation::find($id);

        if (!$evaluations) {
            abort(404); // Retorna uma resposta 404 caso a avaliação não seja encontrada
        }

        return view('evaluation.show', ['evaluations' => $evaluations]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('evaluation.edit');
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
