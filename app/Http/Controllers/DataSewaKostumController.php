<?php

namespace App\Http\Controllers;

use App\Models\SewaKostumModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataSewaKostumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataSewa = SewaKostumModel::latest()->paginate(10);
        return view('admin.dataSewaan.index', compact('dataSewa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
