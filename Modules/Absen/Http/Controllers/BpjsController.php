<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\Bpjs;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Pegawai;
use Illuminate\Contracts\Support\Renderable;

class BpjsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::bpjs.index', [
            'bpjs' => Bpjs::all()
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
        Bpjs::create([
            'pegawai_id' => $request->pegawai_id,
            'jenis_bpjs'=> $request->jenis_bpjs,
            'no_bpjs'=> $request->no_bpjs,
            'iuran_bulanan'=> $request->iuran_bulanan,
        ]);

        return redirect('/absen/bpjs');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::bpjs.tambah',[
            'pegawais' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $bpjs = Bpjs::find($id);

        return view('absen::bpjs.edit', compact('bpjs'), [
            'pegawais' => Pegawai::all()
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
            'pegawai_id'=> 'required',
            'jenis_bpjs'=> 'required',
            'no_bpjs'=> 'required',
            'iuran_bulanan'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Bpjs::where('id', $id) 
                ->update($input);
        return redirect('/absen/bpjs')->with('success', 'Data uang saku Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $bpjs = Bpjs::find($id);
        

        $bpjs->delete();
        return redirect('/absen/bpjs')->with('success', 'Data bpjs Berhasil Dihapus');
    }
}
