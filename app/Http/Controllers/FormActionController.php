<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormActionController extends Controller
{
    public function __invoke(Request $request)
    {
       return view('admin.form');
    }
}
