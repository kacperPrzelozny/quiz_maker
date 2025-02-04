<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quizzes\StoreQuizRequest;
use App\Models\Quiz;

class QuizzesController extends Controller
{
    public function index()
    {
        $quizzes = auth()->user()->quizzes();

        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $categories = auth()->user()->categories()->get();

        return view('quizzes.create', compact('categories'));
    }

    public function store(StoreQuizRequest $request)
    {
        $validated = $request->validated();

        $quiz = new Quiz($validated);
        $quiz->save();

        return redirect()->route('quizzes.index');
    }
}
