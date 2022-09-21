<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\Role;


class DitolakController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role=Role::select()->where('user_id',Auth::user()->id)->get()->first();
        $historipengajuanbiasa=HistoriPengajuanBiasa::select()->where('status',3)->get()->first();
             return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.index', [
                    'role' => $role->role_id,
                    'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$historipengajuanbiasa->pengajuan_biasa_id)->get(),
                 
                ]); 
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pengajuan::create');
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
        return view('pengajuan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pengajuan::edit');
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
