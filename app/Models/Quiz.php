<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quiz extends Model
{
    protected $table = 'quizzes';

    protected $fillable = [
      'user_id',
      'category_id',
      'name',
      'randomize'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }

    public function sharedQuiz(): HasOne
    {
        return $this->hasOne(SharedQuiz::class, 'quiz_id');
    }
}
