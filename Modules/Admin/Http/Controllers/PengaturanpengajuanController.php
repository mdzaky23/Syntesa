<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\PenerimaProject;
use Modules\Admin\Entities\PengajuProject;

class PengaturanpengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::PengaturanPengajuan.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        PengajuProject::create([
            'jabatan_pengaju_project' => $request->jabatan_pengaju_project,
        ]);
        PenerimaProject::create([
            'tingkatan_penerima' => $request->tingkatan_penerima,
            'jabatan_penerima_project' => $request->tingkatan_penerima,
        ]);
        $request->validate([
            'tingkat_penerima.*.kategori' => 'required',
            'tingkat_penerima.*tingkat_penerima' => 'required',
            'jabatan_penerima.*kategori_penerima' => 'required',
            'jabatan_penerima.*jabatan_penerima' => 'required',
        ]);
        foreach ($request->foto as $key => $value) {
            if ($value['tingkat_penerima']) {
                $tingkat_penerima = $value['tingkat_penerima']->store('');
            }
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
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
