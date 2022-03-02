<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program()
    {
        return view('programs', [
            'title' => 'Program',
        ]);
    }
}
