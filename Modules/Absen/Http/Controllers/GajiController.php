<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Pegawai;
use Modules\Absen\Entities\Uangsaku;
use Modules\Absen\Entities\Gajipokok;
use Illuminate\Contracts\Support\Renderable;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::gaji.index', [
            'pegawais' => Pegawai::all(),
            'gajipokoks' => Gajipokok::all(),
            'uangsakus' => Uangsaku::all(),
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
        $pegawai = Pegawai::find($id);

        return view('absen::gaji.lihat', compact('pegawai'), [
            'pegawais'=>$pegawai->get(),
            'gajipokoks' => Gajipokok::all(),
            'uangsakus' => Uangsaku::all(),
            
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
