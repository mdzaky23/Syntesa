<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Divisi;
use Modules\Absen\Entities\Jabatan;
use Modules\Absen\Entities\Pegawai;
use Modules\Absen\Entities\Presensi;
use Illuminate\Contracts\Support\Renderable;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::presensi.index', [
            'presensis' => Presensi::all()
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
        Presensi::create([
            'pegawai_id' => $request->pegawai_id,
            'user_id' => $request->user_id,
            'tgl_absen' => $request->tgl_absen,
            'divisi_id' => $request->divisi_id,
            'jabatan_id' => $request->jabatan_id,
            'keterangan' => $request->keterangan,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
            'waktukerja_id' => $request->waktukerja_id,

        ]);

        return redirect('/absen/presensi');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::presensi.tambah', [
            'presensis' => Presensi::all(),
            'pegawais' => Pegawai::all(),
            'divisis' => Divisi::all(),
            'jabatans' => Jabatan::all(), 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $presensi = Presensi::find($id);

        return view('absen::presensi.edit', compact('presensi'), [
            'presensis' => Presensi::all(),
            'pegawais' => Pegawai::all(),
            'divisis' => Divisi::all(),
            'jabatans' => Jabatan::all(), 
        ]);
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
            'pegawai_id' => 'required',
            'user_id' => '',
            'tgl_absen' => 'required',
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
            'keterangan' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
            'waktukerja_id' => '',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Presensi::where('id', $id) 
                ->update($input);
        return redirect('/absen/presensi')->with('success', 'Data pendidikan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $presensi = Presensi::find($id);
        

        $presensi->delete();
        return redirect('/absen/presensi')->with('success', 'Data pendidikan Berhasil Dihapus');
    }
}
