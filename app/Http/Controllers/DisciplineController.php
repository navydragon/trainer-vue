<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function test(Request $request)
    {
        dd($request->q);
    }
}
