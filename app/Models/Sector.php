<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
      'sector'
    ];
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
