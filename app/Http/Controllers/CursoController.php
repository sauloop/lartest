<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {

        $courses = Course::paginate();

        return view('cursos.index', compact('courses'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('cursos.show', compact('course'));
    }
}
