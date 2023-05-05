<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('score_work');
            $table->string('justification_work')->nullable();

            $table->string('score_proactivity');
            $table->string('justification_proactivity')->nullable();

            $table->string('score_responsibility');
            $table->string('justification_responsibility')->nullable();

            $table->string('score_creative');
            $table->string('justification_creative')->nullable();

            $table->string('score_communication');
            $table->string('justification_communication')->nullable();

            $table->string('score_punctuality');
            $table->string('justification_punctuality')->nullable();

            $table->string('score_behavior');
            $table->string('justification_behavior')->nullable();

            $table->string('score_technique');
            $table->string('justification_technique')->nullable();

            $table->string('score_improvement');
            $table->string('justification_improvement')->nullable();

            $table->string('score_leader');
            $table->string('justification_leader');

            $table->foreignId('sector_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
