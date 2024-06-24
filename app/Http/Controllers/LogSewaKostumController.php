<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogSewaKostumController extends Controller
{
    public function index()
    {
        return view('admin.logsewakostum.index');
    }
}
