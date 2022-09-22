<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Illuminate\Http\Request;

class ShowGameController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('GameView');
    }
}
