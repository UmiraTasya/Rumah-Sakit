<?php

namespace App\Http\Controllers;
    class IndexController extends Controller
    {
    public function about()
    {
    return view('about');
    }
    public function home()
    {
    return view('home');
    }
    }

?>

