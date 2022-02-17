<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('/index');
    }
    public function post(Request $request)
    {
        $form = $request->all();
        unset($form['_token_']);
        Test::create($form);
        return view('/thanks');
    }
}