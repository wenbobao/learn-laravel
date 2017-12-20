<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        # code...
        // return '主页';
        return view('static_pages/home');
    }

    public function help()
    {
        # code...
        // return '帮助页';
        return view('static_pages/help');
    }

    public function about()
    {
        # code...
        // return '关于页';
        return view('static_pages/about');
    }
}
