<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\User;

class LoadLessonController extends Controller
{
    public function __invoke()
    {
        try {
            $state = User::find(1)->lessons->find(1)->pivot->game_state;
            $string_message = $state;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return response()->json(['gameLoaded' => $string_message]);
    }
}
