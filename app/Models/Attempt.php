<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attempt extends Model
{
    protected $table = 'attempts';

    protected $fillable = [
        'shared_quiz_id',
        'user_id',
    ];

    public function sharedQuiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'shared_quiz_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attemptQuestions(): HasMany
    {
        return $this->hasMany(AttemptQuestion::class, 'attempt_id');
    }
}
