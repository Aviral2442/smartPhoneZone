<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutData()
    {
        $aboutus = DB::table('aboutpage')->get();
        return view('aboutus', compact('aboutus'));
    }
}