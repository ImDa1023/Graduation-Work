<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function index() {
        return Score::all();
    }
    public function show(Score $score)
    {
        return $score;
    }
    public function store(Request $request)
    {
        return Score::create($request->all());
    }
    public function update(Request $request, Score $score)
    {
        $score->update($request->all());
        return $score;
    }
    public function destroy(Score $score)
    {
        $score->delete();
        return $score;
    }
}
