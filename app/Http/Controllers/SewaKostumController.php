<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\CostumModel;
use Illuminate\Http\Request;
use App\Models\SewaKostumModel;
use Illuminate\Http\RedirectResponse;

class SewaKostumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $sewaCostumes = CostumModel::latest()->paginate(4);

        if (auth()->user()->level === 'admin') {
            return view('sewakostum.index', compact('sewaCostumes'));
        }
        return view('peminjam.sewakostum.index', compact('sewaCostumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('peminjam.sewakostum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kostum_id' => 'required|exists:costum_models,id',
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'kota' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
            'alamat_lengkap' => 'required|string',
            'tgl_pinjam' => 'required|date',
        ]);

        SewaKostumModel::create($validated);

        $kostumStatus = CostumModel::findOrFail($request->kostum_id);
        $kostumStatus->update([
            'status' => 'Disewa'
        ]);
        
        return redirect()->route('sewa-kostum.index')->with('success', 'Sewa Kostum berhasil diajukan!');
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
