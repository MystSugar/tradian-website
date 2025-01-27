<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::latest()->take(3)->get(); 
        return view('welcome', compact('procedures'));
    }

}
