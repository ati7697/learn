<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Lesson_User;
use Illuminate\Http\Request;

class LoadGameController extends Controller
{
    public function __invoke()
    {
        $state = Lesson_User::where('lesson_id', '=', '1')->where('user_id', '=', '1')->latest('updated_at')->first();

        try {
            $string_message = $state['game_state'];
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return response()->json(['gameLoaded' => $string_message]);
    }
}
