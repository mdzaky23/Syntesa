<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Absen\Entities\Jabatan;
use Modules\Absen\Entities\Uangtunjangan;
use Illuminate\Contracts\Support\Renderable;

class UangtunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('absen::uangtunjangan.index', [
            'uangtunjangans' => Uangtunjangan::all()
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
        Uangtunjangan::create([
            'jabatan_id' => $request->jabatan_id,
            'uang_jabatan'=> $request->uang_jabatan,
            'uang_transport'=> $request->uang_transport,
        ]);

        return redirect('/absen/uangtunjangan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('absen::uangtunjangan.tambah', [
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
        $uangtunjangan = Uangtunjangan::find($id);

        return view('absen::uangtunjangan.edit', compact('uangtunjangan'), [
            'jabatans' => Jabatan::all()
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
            'jabatan_id'=> 'required',
            'uang_jabatan'=> 'required',
            'uang_transport'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Uangtunjangan::where('id', $id) 
                ->update($input);
        return redirect('/absen/uangtunjangan')->with('success', 'Data uang tunjangan Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $uangtunjangan = Uangtunjangan::find($id);
        

        $uangtunjangan->delete();
        return redirect('/absen/uangtunjangan')->with('success', 'Data uangtunjangan Berhasil Dihapus');
    }
}
