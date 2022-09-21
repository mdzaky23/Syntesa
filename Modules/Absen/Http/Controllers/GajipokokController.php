<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Golongan;
use Modules\Absen\Entities\Gajipokok;
use Illuminate\Contracts\Support\Renderable;

class GajipokokController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::gajipokok.index', [
            'gajipokoks' => Gajipokok::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('absen::gajipokok.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        Gajipokok::create([
            'golongan_id' => $request->golongan_id,
            'masa_kerja'=> $request->masa_kerja,
            'gaji'=> $request->gaji,
        ]);
        return redirect('/absen/gajipokok');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::gajipokok.tambah', [
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
        $gajipokok = Gajipokok::find($id);

        return view('absen::gajipokok.edit', compact('gajipokok'), [
            'golongans' => Golongan::all()
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
            'golongan_id'=> 'required',
            'masa_kerja'=> 'required',
            'gaji'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Gajipokok::where('id', $id) 
                ->update($input);
        return redirect('/absen/gajipokok')->with('success', 'Data golongan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $gajipokok = Gajipokok::find($id);
        

        $gajipokok->delete();
        return redirect('/absen/gajipokok')->with('success', 'Data gajipokok Berhasil Dihapus');
    }
}
