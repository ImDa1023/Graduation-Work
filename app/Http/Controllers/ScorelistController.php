<?php

namespace App\Http\Controllers;

use App\Scorelist;
use Illuminate\Http\Request;

class ScorelistController extends Controller
{
    //
    public function index() 
    {
        return Scorelist::all();
    }
    public function show(Scorelist $scorelist)
    {
        return $scorelist;
    }
    public function store(Request $request)
    {
        return Scorelist::create($request->all());
    }
    public function update(Request $request, Scorelist $scorelist)
    {
        $scorelist->update($request->all());
        return $scorelist;
    }
    public function destroy(Scorelist $scorelist)
    {
        $scorelist->delete();
        return $scorelist;
    }

}
