<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\LampiranPengajuanBiasa;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\Role;

class HistoriBiasaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
    //     $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
    //     if($role->divisi_id==1 && $role->jabatan_id==2) {
    //     $pengajuanbiasa=HistoriPengajuanBiasa::select()->where('status_id,4')->where('user_id',Auth::user()->id)->orderby()->get()->first();
    //      return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
    //          'role' => $role->role_id,
    //          'pengajuanbiasas'=>  $pengajuanbiasa,
    //          ]);
    //          return redirect('/pengajuan/PengajuanBiasa/pengajuan_selesai/index');
    // }
}

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        if($role->divisi_id==1 && $role->jabatan_id==2) {
            $histori=HistoriPengajuanBiasa::select()->where('status',1)->get()->first();
             return view('pengajuan::PengajuanBiasa.pengajuan_selesai.index', [
                    'role' => $role->role_id,
                    'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$histori->pengajuan_biasa_id)->get(),
                 
                ]); 
                

        }
        if($role->divisi_id==1 && $role->jabatan_id==2) {
            $historipengajuanbiasa=HistoriPengajuanBiasa::select()->where('status',3)->get()->first();
             return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.index', [
                    'role' => $role->role_id,
                    'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$historipengajuanbiasa->pengajuan_biasa_id)->get(),
                 
                ]); 
                

        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
        HistoriPengajuanBiasa::create([
            'pengajuan_biasa_id' => $request->id,
            'user_id' => auth::user()->id,
            'divisi_id' => $role->divisi_id,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'catatan' => $request->catatan, 
        ]);

       
}

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $detail= PengajuanBiasa::find($id);
        $pengajuanlampiran = LampiranPengajuanBiasa::select()->where('pengajuan_biasa_id',  $detail->id)->get();
        return view('pengajuan::PengajuanBiasa.detail_pengajuan.index', compact('detail'), [
            'role' => $role->role_id,
            'details' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id)->get(),
            'pengajuanlampirans' =>  $pengajuanlampiran,
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $detail= PengajuanBiasa::find($id);
        $lampiran= LampiranPengajuanBiasa::select()->get();
        return view('pengajuan::PengajuanBiasa.detail_pengajuan.index', compact('detail'), [
            'role' => $role->role_id,

            'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id && $lampiran->pengajuan_biasa_id)->get(),
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
        $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
        HistoriPengajuanBiasa::create([
            'pengajuan_biasa_id' => $id,
            'user_id' => auth::user()->id,
            'divisi_id' => $role->divisi_id,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'catatan' => $request->catatan, 
        ]);
        
        
        // $rules = [
        //     'status' => 'required',
        // ];
        // $validateData = $request->validate($rules);
        // $input = $validateData;
        // HistoriPengajuanBiasa::where('id',$id)->update($input);
        // return redirect('/pengajuan/PengajuanBiasa/pengajuan_selesai/index');
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
