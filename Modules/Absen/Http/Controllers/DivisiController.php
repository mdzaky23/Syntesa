<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Divisi;
use Illuminate\Contracts\Support\Renderable;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::divisi.index', [
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('absen::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        Divisi::create([
            'nama_divisi' => $request->nama_divisi,
        ]);

        return redirect('/absen/divisi');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::divisi.tambah');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $divisi = Divisi::find($id);

        return view('absen::divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_divisi'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Divisi::where('id', $id) 
                ->update($input);
        return redirect('/absen/divisi')->with('success', 'Data divisi Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        

        $divisi->delete();
        return redirect('/absen/divisi')->with('success', 'Data divisi Berhasil Dihapus');
    }
}
