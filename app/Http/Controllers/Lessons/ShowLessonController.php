<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Inertia\Response;

class ShowLessonController extends Controller
{
    public function __invoke(Request $request, Course $course, Lesson $lesson): Response
    {
        //dd($lesson);

        return inertia('GameView', ['lesson'=> $lesson]);
    }
}
