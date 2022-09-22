<?php

namespace App\Http\Controllers;

use App\Models\GameState;
use App\Models\Lesson_User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SaveGameController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        Lesson_User::updateOrCreate(
            ['lesson_id' => '1',
            'user_id'=> '1',],
            ['game_state' => $request->input('game_state')]
        );
        return response()->json(['gameSaved' => true]);
    }
}
