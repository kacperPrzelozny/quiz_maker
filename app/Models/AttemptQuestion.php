<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttemptQuestion extends Model
{
    protected $table = 'attempt_questions';

    protected $fillable = [
        'attempt_id',
        'question_id',
        'chosen_answer_id',
    ];

    public function attempt(): BelongsTo
    {
        return $this->belongsTo(Attempt::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function chosenAnswer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }
}
