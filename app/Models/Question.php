<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'quiz_id',
        'content',
        'order'
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class, 'question_id');
    }

    public function attemptQuestion(): HasMany
    {
        return $this->hasMany(AttemptQuestion::class, 'question_id');
    }
}
