<?php

namespace App\Http\Controllers\Peminjam;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamController extends Controller
{
    public function index(): View
    {
        return view('peminjam.dashboard.index');
    }
}
