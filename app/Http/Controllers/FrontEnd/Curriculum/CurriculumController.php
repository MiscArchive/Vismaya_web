<?php

namespace App\Http\Controllers\FrontEnd\Curriculum;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index($slug)
    {
        $allCurriculums = Curriculum::firstWhere('status', 1)->get();
        $curriculum = Curriculum::where('slug', $slug)->where('status', 1)->first();
        return view('frontEnd.pages.curriculum.index', compact('curriculum','allCurriculums'));
    }
}
