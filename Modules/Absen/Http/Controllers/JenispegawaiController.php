<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Jenispegawai;
use Illuminate\Contracts\Support\Renderable;

class JenispegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::jenispegawai.index', [
            'jenispegawais' => Jenispegawai::all()
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
        Jenispegawai::create([
            'nama_jenispegawai' => $request->nama_jenispegawai,
        ]);

        return redirect('/absen/jenispegawai');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::jenispegawai.tambah');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $jenispegawai = Jenispegawai::find($id);

        return view('absen::jenispegawai.edit', compact('jenispegawai'));
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
            'nama_jenispegawai'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Jenispegawai::where('id', $id) 
                ->update($input);
        return redirect('/absen/jenispegawai')->with('success', 'Data jenispegawai Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $jenispegawai = Jenispegawai::find($id);
        

        $jenispegawai->delete();
        return redirect('/absen/jenispegawai')->with('success', 'Data jenispegawai Berhasil Dihapus');
    }
}
