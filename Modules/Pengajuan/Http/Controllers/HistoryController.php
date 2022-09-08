<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\PengajuanBiasa;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('role_id')->where('jabatan_id',2)->where('user_id',Auth::user()->id)->get()->first();
          
               $pengajuanbiasa=HistoriPengajuanBiasa::select()->where('status_id,4')->where('user_id',Auth::user()->id)->get()->first();
                return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
                    'role' => $role->role_id,
                    'pengajuanbiasas'=>  $pengajuanbiasa,
                    ]);
            
                }  
            // if($role->divisi_id==2){
            //     $histori=HistoriPengajuanBiasa::select()->where('status_id,4')->where('user_id',Auth::user()->id)->get()->first();
            // }
            // if($role->divisi_id==3){
            //     $histori=HistoriPengajuanBiasa::select()->where('status_id,4')->where('user_id',Auth::user()->id)->get()->first();
            
            // return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
            // 'role' => $role->role_id,
            // 'historis'=> $histori,
            // ]); }}



        // $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        // $pengajuanbiasas = PengajuanBiasa::select()->where('user_id', Auth::user()->id)->get()->first();
        // return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
        //     'role' => $role->role_id,
        //     'historis' => HistoriPengajuanBiasa::all(), 
        //     'his' => PengajuanBiasa::all(), 
        //     // select()->where('pengajuan_biasa_id',  $pengajuanbiasas->id)->get(),
        //     'pengajuanbiasas' =>  $pengajuanbiasas,
            
            
        // ]);


    

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        if($role->divisi_id==1 && $role->jabatan_id==2) {
            $historipengajuanbiasa=HistoriPengajuanBiasa::select()->where('status',1)->where('user_id',Auth::user()->id)->where('divisi_id',1)->get()->first();
             return view('pengajuan::PengajuanBiasa.pengajuan_selesai.index', [
                    'role' => $role->role_id,
                    'historipengajuanbiasas'=> $historipengajuanbiasa,
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
            'pengajuan_biasa_id' => $id,
            'user_id' => auth::user()->id,
            'divisi_id' => $role->divisi_id,
            'keterangan' => $request->keterangan,
            'status' => $request->status_id,
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
