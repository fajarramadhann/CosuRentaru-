<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\CostumModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class CostumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $costumes = CostumModel::latest()->paginate(10);
        return view('admin.datakostum.index', compact('costumes'));
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama_kostum' => 'required',
            'karakter' => 'required',
            'anime' => 'required',
            'size' => 'required|not_in:Pilih ukuran..',
            'price_per_day' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image_kostum' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $image = $request->file('image_kostum');
        $image->storeAs('/kostum', $image->hashName());

        if ($request->file('image_kostum')) {
            $validated['image_kostum'] = $request->file('image_kostum')->store('kostum');
        }
        // $path = $request->file('image_kostum')->store('kostum');

        CostumModel::create($validated);
        return redirect()->route('costumes.index')->with('toast_success', 'Kostum berhasil ditambahkan');
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
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'nama_kostum' => 'required',
            'karakter' => 'required',
            'anime' => 'required',
            'size' => 'required|not_in:Pilih ukuran..',
            'price_per_day' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image_kostum' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $costume = CostumModel::findOrFail($id);

        if ($request->hasFile('image_kostum')) {
            $image = $request->file('image_kostum');
            $image->storeAs('/kostum', $image->hashName());
            $validated['image_kostum'] = $request->file('image_kostum')->store('kostum');

            Storage::delete('public/' . $costume->image_kostum);
            $costume->update($validated);

        } else {
            $costume->update([
                'nama_kostum' => $request->nama_kostum,
                'karakter' => $request->karakter,
                'anime' => $request->anime,
                'size' => $request->size,
                'price_per_day' => $request->price_per_day,
                'quantity' => $request->quantity,
            ]);
        }
        return redirect()->route('costumes.index')->with('success', 'Data kostum berhasil diupdate');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $costume = CostumModel::findOrFail($id);
        Storage::delete('public/' . $costume->image_kostum);
        $costume->delete();
        return redirect()->route('costumes.index')->with('success', 'Data kostum berhasil dihapus');
    }
}
