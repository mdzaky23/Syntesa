<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Waktukerja;
use Illuminate\Contracts\Support\Renderable;

class WaktukerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::waktukerja.index', [
            'waktukerjas' => Waktukerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('absen::waktukerja.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        Waktukerja::create([
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang'=> $request->jam_pulang,
            'batas_masuk'=> $request->batas_masuk,
        ]);

        return redirect('/absen/waktukerja');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::waktukerja.tambah');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $waktukerja = Waktukerja::find($id);

        return view('absen::waktukerja.edit', compact('waktukerja'));
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
            'jam_masuk'=> 'required',
            'jam_pulang'=> 'required',
            'batas_masuk'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Waktukerja::where('id', $id) 
                ->update($input);
        return redirect('/absen/waktukerja')->with('success', 'Data waktu Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $waktukerja = waktukerja::find($id);
        

        $waktukerja->delete();
        return redirect('/absen/waktukerja')->with('success', 'Data waktukerja Berhasil Dihapus');
    }
}
