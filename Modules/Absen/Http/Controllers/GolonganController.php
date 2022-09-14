<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Golongan;
use Modules\Absen\Entities\Pendidikan;
use Illuminate\Contracts\Support\Renderable;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::golongan.index', [
            'golongans' => Golongan::all()
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
        Golongan::create([
            'pendidikan_id' => $request->pendidikan_id,
            'masa_kerja'=> $request->masa_kerja,
            'nama_golongan'=> $request->nama_golongan,
            'gaji'=> $request->gaji,
        ]);

        return redirect('/absen/golongan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::golongan.tambah', [
            'pendidikans' => Pendidikan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $golongan = Golongan::find($id);

        return view('absen::golongan.edit', compact('golongan'));
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
            'pendidikan_id'=> 'required',
            'masa_kerja'=> 'required',
            'nama_golongan'=> 'required',
            'gaji'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Golongan::where('id', $id) 
                ->update($input);
        return redirect('/absen/golongan')->with('success', 'Data golongan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $golongan = Golongan::find($id);
        

        $golongan->delete();
        return redirect('/absen/golongan')->with('success', 'Data golongan Berhasil Dihapus');
    }
}
