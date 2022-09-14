<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Jabatan;
use Modules\Absen\Entities\Uangsaku;
use Illuminate\Contracts\Support\Renderable;

class UangsakuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::uangsaku.index', [
            'uangsakus' => Uangsaku::all()
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
        Uangsaku::create([
            'jabatan_id' => $request->jabatan_id,
            'uang_saku'=> $request->uang_saku,
            'uang_representatif'=> $request->uang_representatif,
        ]);

        return redirect('/absen/uangsaku');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::uangsaku.tambah', [
            'jabatans' => Jabatan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $uangsaku = Uangsaku::find($id);

        return view('absen::uangsaku.edit', compact('uangsaku'));
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
            'jabatan_id'=> 'required',
            'uang_Saku'=> 'required',
            'uang_representatif'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Uangsaku::where('id', $id) 
                ->update($input);
        return redirect('/absen/uangsaku')->with('success', 'Data uang saku Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $uangsaku = Uangsaku::find($id);
        

        $uangsaku->delete();
        return redirect('/absen/uangsaku')->with('success', 'Data uangsaku Berhasil Dihapus');
    }
}
