<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Srtabsen;
use Illuminate\Contracts\Support\Renderable;

class LpsrtabsenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::lpsrtabsen.index', [
            'srtabsens' => Srtabsen::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('absen::lpsrtabsen.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $lampiran = $request->file('lampiran')->store('lampiran_absen');
        if ($request->file('lampiran')){
            $lampiran;
        }
        Srtabsen::create([
            'nip' => $request->nip,
            'nama_pegawai'=> $request->nama_pegawai,
            'kategori'=> $request->kategori,
            'lampiran'=> $lampiran,
        ]);

        return redirect('/absen/lpsrtabsen');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::lpsrtabsen.tambah');
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
