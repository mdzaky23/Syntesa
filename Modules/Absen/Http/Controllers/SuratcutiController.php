<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Divisi;
use Modules\Absen\Entities\Jabatan;
use Modules\Absen\Entities\Pegawai;
use Modules\Absen\Entities\Suratcuti;
use Illuminate\Contracts\Support\Renderable;

class SuratcutiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::suratcuti.index', [
            'suratcutis' => Suratcuti::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('absen::suratcuti.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pegawai' => '',
            'nip' => '',
            'jabatan' => '',
            'divisi' => '',
            'lama_cuti' => '',
            'tgl_cuti' => '',
            'akhir_tgl_cuti' => '',
            'tujuan' => '',
            'serah_tugas' => '',
            'no_hp' => '',
            'nama_atas' => '',
            'nip_atas' => '',
            'jabatan_atas' => '',
            'divisi_atas' => '',
            'jumlah_cuti' => '',
            'ambil_cuti' => '',
            'sisa_cuti' => '',
            'catatan' => '',
        ]);


        Suratcuti::create($validatedData);

        return redirect('/absen/suratcuti')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::suratcuti.tambah', [
            'pegawais' => Pegawai::all(),
            'jabatans' => Jabatan::all(),
            'divisis' => Divisi::all(),
            'suratcutis' => Suratcuti::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('absen::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
