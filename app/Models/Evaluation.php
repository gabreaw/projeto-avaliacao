<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'name',
        'score_work',
        'justification_work',
        'score_proactivity',
        'justification_proactivity',
        'score_responsibility',
        'justification_responsibility',
        'score_creative',
        'justification_creative',
        'score_communication',
        'justification_communication',
        'score_punctuality',
        'justification_punctuality',
        'score_behavior',
        'justification_behavior',
        'score_technique',
        'justification_technique',
        'score_improvement',
        'justification_improvement',
        'score_leader',
        'justification_leader'

    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

}
