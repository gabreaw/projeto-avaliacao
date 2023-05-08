<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluationStorePostRequest;
use App\Models\Evaluation;
use App\Models\Sector;
use Illuminate\Http\RedirectResponse;
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
    public function store(EvaluationStorePostRequest $request): RedirectResponse
    {

        $validated = $request->validated();
        $sector = Sector::find($request->sector_id);
        if ($sector) {
            $validated = $sector->evaluations()->create([
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
        }
        return to_route('evaluation.show');
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


}
