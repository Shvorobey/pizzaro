<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class FormActionController extends Controller
{
    public function __invoke(Request $request)
    {
    $menu=Menu::all();


        return view('admin.form', ['menu'=>$menu]);
    }
}
