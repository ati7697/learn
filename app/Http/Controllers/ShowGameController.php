<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ShowGameController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $lesson = Lesson::find(1);

        return inertia('GameView', ['current_lesson'=> $lesson]);
    }
}
