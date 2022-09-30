<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SaveLessonController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $lesson = $request->input('lesson');
        $user = User::find(1);
        $user->lessons()->syncWithPivotValues([$lesson['id']], ['game_state'=>$request->input('game_state')]);
        return response()->json(['gameSaved' => true]);
    }
}
