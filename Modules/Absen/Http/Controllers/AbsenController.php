<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Divisi;
use Modules\Absen\Entities\Jabatan;
use Modules\Absen\Entities\Pegawai;
use Modules\Absen\Entities\Golongan;
use Modules\Absen\Entities\Pendidikan;
use Modules\Absen\Entities\Jenispegawai;
use Illuminate\Contracts\Support\Renderable;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::index', [
            'pegawais'=> Pegawai::all(),
            'pendidikans'=> Pendidikan::all(),
            'jenispegawais'=> Jenispegawai::all(),
            'jabatans'=> Jabatan::all(),
            'divisis'=> Divisi::all(),
            'golongans'=> Golongan::all(),
            'jumlahpegawai' => Pegawai::all()->count(),
            'jumlahpendidikan' => pendidikan::all()->count(),
            'jumlahjenispegawai' => Jenispegawai::all()->count(),
            'jumlahjabatan'=> Jabatan::all()->count(),
            'jumlahdivisi'=> Divisi::all()->count(),
            'jumlahgolongan'=> Golongan::all()->count(),
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
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::show');
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
