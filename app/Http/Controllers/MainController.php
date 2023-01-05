<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function code_autocomplete(Request $request)
    {
        
    }
}
