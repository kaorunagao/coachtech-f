<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $items = Test::all();
        return view('index', ['items' => $items]);
    }

    public function thanks()
    {
        return view('thanks');
    }
    
}