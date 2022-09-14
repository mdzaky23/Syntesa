<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Jabatan;
use Illuminate\Contracts\Support\Renderable;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::jabatan.index', [
            'jabatans' => Jabatan::all()
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
        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect('/absen/jabatan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::jabatan.tambah');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);

        return view('absen::jabatan.edit', compact('jabatan'));
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
            'nama_jabatan'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Jabatan::where('id', $id) 
                ->update($input);
        return redirect('/absen/jabatan')->with('success', 'Data jabatan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        

        $jabatan->delete();
        return redirect('/absen/jabatan')->with('success', 'Data jabatan Berhasil Dihapus');
    }
}
