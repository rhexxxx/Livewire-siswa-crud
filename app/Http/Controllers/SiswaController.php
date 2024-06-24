<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('main.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nis' => 'required',
            'kelas' =>'required',
            'jurusan' => 'required',
            'gender' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('index')->with('success', 'Siswa successfully added');
        
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
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('components.update', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nis' => 'required',
            'kelas' =>'required',
            'jurusan' => 'required',
            'gender' => 'required',
        ]);

        $siswa->update($validatedData);
        return redirect()->route('index')->with('success', 'Siswa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('index')->with('success', 'Siswa deleted successfully.');
    }
}
