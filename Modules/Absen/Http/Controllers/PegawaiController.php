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

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::pegawai.index', [
            'pegawais' => Pegawai::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        
        return view('absen::pegawai.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        Pegawai::create([
            'nip' => $request->nip,
            'nama_pegawai'=> $request->nama_pegawai,
            'alamat'=> $request->alamat,
            'tp_lahir'=> $request->tp_lahir,
            'tgl_lahir'=> $request->tgl_lahir,
            'pendidikan_id'=> $request->pendidikan_id,
            'jk'=> $request->jk,
            'tgl_masuk'=> $request->tgl_masuk,
            'jenispegawai_id'=> $request->jenispegawai_id,
            'tgl_pengangkatan'=> $request->tgl_pengangkatan,
            'jabatan_id'=> $request->jabatan_id,
            'divisi_id'=> $request->divisi_id,
            'golongan_id'=> $request->golongan_id,
            'no_hp'=> $request->no_hp,
            'no_rek'=> $request->no_rek,
            'uangsaku_id'=> $request->uangsaku_id,
            'user_id'=> $request->user_id,
        ]);

        return redirect('/absen/pegawai');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::pegawai.tambah', [
            'pendidikans'=> Pendidikan::all(),
            'jenispegawais'=> Jenispegawai::all(),
            'jabatans'=> Jabatan::all(),
            'divisis'=> Divisi::all(),
            'golongans'=> Golongan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return view('absen::pegawai.edit', compact('pegawai'));
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
            'nip' => 'required',
            'nama_pegawai'=> 'required',
            'alamat'=> 'required',
            'tp_lahir'=> 'required',
            'tgl_lahir'=> 'required',
            'pendidikan_id'=> 'required',
            'jk'=> 'required',
            'tgl_masuk'=> 'required',
            'jenispegawai_id'=> 'required',
            'jabatan_id'=> 'required',
            'divisi_id'=> 'required',
            'golongan_id'=> 'required',
            'no_hp'=> 'required',
            'no_rek'=> 'required',
            'uangsaku_id'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Pegawai::where('id', $id) 
                ->update($input);
        return redirect('/absen/pegawai')->with('success', 'Data pegawai Berhasil Di Ubah');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        

        $pegawai->delete();
        return redirect('/absen/pegawai')->with('success', 'Data pegawai Berhasil Dihapus');
    }
}
