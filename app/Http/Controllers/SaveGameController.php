<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SaveGameController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $lesson = $request->input('lesson');
        $user = User::find(1);
        $user->lessons()->syncWithPivotValues([$lesson['id']], ['game_state'=>$request->input('game_state')]);
        return response()->json(['gameSaved' => true]);
    }
}
