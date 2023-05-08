<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationStorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
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
        ];
    }
}
