<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Pendidikan;
use Illuminate\Contracts\Support\Renderable;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::pendidikan.index', [
            'pendidikans' => Pendidikan::all()
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
        Pendidikan::create([
            'nama_pendidikan' => $request->nama_pendidikan,
        ]);

        return redirect('/absen/pendidikan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::pendidikan.tambah');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);

        return view('absen::pendidikan.edit', compact('pendidikan'));
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
            'nama_pendidikan'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Pendidikan::where('id', $id) 
                ->update($input);
        return redirect('/absen/pendidikan')->with('success', 'Data pendidikan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        

        $pendidikan->delete();
        return redirect('/absen/pendidikan')->with('success', 'Data pendidikan Berhasil Dihapus');
    }
}