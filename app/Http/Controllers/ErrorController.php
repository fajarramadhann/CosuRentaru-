<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class ErrorController extends Controller
{
    public function error403(): View
    {
        return view('errors.403');
    }

    public function error404(): View
    {
        return view('errors.404');
    }
    public function error500(): View
    {
        return view('errors.500');
    }
}
