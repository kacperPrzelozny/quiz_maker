<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'question_id',
        'content',
        'order',
        'is_correct',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function attemptQuestions(): HasMany
    {
        return $this->hasMany(AttemptQuestion::class, 'chosen_answer_id');
    }
}
