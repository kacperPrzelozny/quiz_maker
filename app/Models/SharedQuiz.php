<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SharedQuiz extends Model
{
    protected $table = 'shared_quizzes';

    protected $fillable = [
        'quiz_id',
        'shared_key',
    ];

    public function attempts(): HasMany
    {
        return $this->hasMany(Attempt::class, 'shared_quiz_id');
    }
    public function quiz(): HasOne
    {
        return $this->hasOne(Quiz::class, 'id', 'quiz_id');
    }
}
