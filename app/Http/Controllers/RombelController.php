<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombels = Rombel::all();

        return view('Rombels.index', compact('rombels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Rombels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rombel' => 'required|min:3',
        ]);

        Rombel::create([
            'rombel' => $request->rombel,
        ]);

        return redirect()->route('rombel.index')->with('success', 'Berhasil menambahkan data rombel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rombel $rombel, $id)
    {
        $rombel = Rombel::find($id);

        return view('rombels.edit', compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rombel $rombel, $id)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        Rombel::find($id)->update($request->all());

        return redirect()->route('rombel.index')->with('success', 'Berhasil mengubah data rombel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rombel $rombel, $id)
    {
        Rombel::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }
}
