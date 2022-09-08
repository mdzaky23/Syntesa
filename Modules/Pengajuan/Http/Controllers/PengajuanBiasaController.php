<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\LampiranPengajuanBiasa;
use Modules\Pengajuan\Entities\Role;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\kategori_pengajuan;

class PengajuanBiasaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        
        return view('pengajuan::PengajuanBiasa.buat_pengajuan.index', [
            'role' => $role->role_id,
            'pengajuanbiasas' => PengajuanBiasa::all(),
        ]);
        return redirect('/pengajuan/PengajuanBiasa/lihat_pengajuan/index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    { 

        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $historis=HistoriPengajuanBiasa::select()->orderby('created_at','desc')->get();
        $pengajuanbiasa=PengajuanBiasa::select()->get();
        // return $historis;


        if($role->divisi_id==1 && $role->jabatan_id==1) { 
            if($historis->status==6) {
            return view('pengajuan::PengajuanBiasa.pengajuan_diproses.index', [
            'role' => $role->role_id,
            'pengajuanbiasas'=> PengajuanBiasa::select()->get(),
         
            ]); 
    }}
        
    if($role->divisi_id==1 && $role->jabatan_id==2) {
        foreach ($historis as $histori) {
            
                if($histori->status==6) {
                return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$histori->pengajuan_biasa_id)->get(),
                
                ]); }

                // elseif($histori->status==1) {
                
                // return view('pengajuan::PengajuanBiasa.pengajuan_diproses.manager', [
                // 'role' => $role->role_id,
                // 'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$histori->pengajuan_biasa_id)->get(),
                
                // ]); }
            // } }
            
            }}}
        
    
        //     $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
    //     if($role->divisi_id==1 && $role->jabatan_id==1) { 
    //     return view('pengajuan::PengajuanBiasa.lihat_pengajuan.index', [
    //         'role' => $role->role_id,
    //         'pengajuanbiasas'=> PengajuanBiasa::select()->get(),
         
    //     ]); 
    // }

        // elseif($role->divisi_id==1 && $role->jabatan_id==2) {
        //  return view('pengajuan::PengajuanBiasa.pengajuan_masuk.index', [
        //         'role' => $role->role_id,
                
        //         'pengajuanbiasas' => PengajuanBiasa::all(),
                
        //     ]);
    
       
       
    //     elseif($role->divisi_id==1 && $role->jabatan_id==2 && $histori->status==1 ) {
    //      return view('pengajuan::PengajuanBiasa.pengajuan_diproses.manager', [
    //             'role' => $role->role_id,
    //             'pengajuanbiasas' => PengajuanBiasa::select()->get(),
                
    //         ]);
    // }
        

    
       

        




        
    

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $hitung = PengajuanBiasa::select()->get()->count();
        $id = $hitung + 1;

        // return $request;
        PengajuanBiasa::create([
            'id' => $id,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'user_id'=>auth::user()->id,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'status'=> $request->status,
            'divisi' => $request->divisi,
            'catatan' => $request->catatan,
            'lampiran_pengajuan_biasa_id' => $id,


        ]);

        // $request->validate([
        //     'lampiran.*.keterangan' => 'required',
        //     'lampiran.*.lampiran' => 'required',
        // ]);

        foreach ($request->lampiran as $key => $value) {
            if ($value['lampiran']) {
                $lampiran = $value['lampiran']->store('lampiran-pengajuan_biasa');
            }
            LampiranPengajuanBiasa::create([
                'pengajuan_biasa_id' => $id,
                'note_lampiran' => $value['note_lampiran'],
                'lampiran' => $lampiran,
            ]);

            $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
            HistoriPengajuanBiasa::create([
            'pengajuan_biasa_id' => $id,
            'user_id' => auth::user()->id,
            'divisi_id' => $role->divisi_id,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'catatan' => $request->catatan, 
            ]);
        }
       
        return redirect('/pengajuan/PengajuanBiasa');
        // PengajuanMasuk::create([
        //     'id' => $id,
        //     'kategoripengajuan' => $request->kategoripengajuan,
        //     'keterangan' => $request->keterangan,
        //     'user_id'=>auth::user()->id,
        //     'jumlah' => $request->jumlah,
        //     'tanggal' => $request->tanggal,
        //     'divisi' => $request->divisi,
        //     'catatan' => $request->catatan,
        //     'lampiran_pengajuan_biasa_id' => $id,
        // ]);

        // $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        // return view(
        //     'pengajuan::rekape.lihatPengajuanBiasa',
        //     [

        //         'role' => $role->role_id,
        //         'pengajuanbiasas' => PengajuanBiasa::all(),
        //     ]
        // );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    { //lampiran
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $pengajuanbiasas = PengajuanBiasa::select()->where('user_id', Auth::user()->id)->get()->first();
        $lampiran = LampiranPengajuanBiasa::select()->where('pengajuan_biasa_id',  $pengajuanbiasas->id)->get();

        // return $lampiran;

        return view('pengajuan::PengajuanBiasa.lampiran_pengajuan.index', [
            'role' => $role->role_id,
            'pengajuanbiasas' =>  $pengajuanbiasas,
            'pengajuanlampirans' => LampiranPengajuanBiasa::select()->where('pengajuan_biasa_id',  $pengajuanbiasas->id)->get(),
        ]);


        // $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        // $detail= PengajuanBiasa::find($id);
        // return view('pengajuan::PengajuanBiasa.detail_pengajuan.index', compact('detail'), [
        //     'role' => $role->role_id,
        //     'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id)->get(),
        // ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        // $detail= PengajuanBiasa::find($id);
        // return view('pengajuan::PengajuanBiasa.detail_pengajuan.index', compact('detail'), [
        //     'role' => $role->role_id,
        //     'pengajuanbiasas' => PengajuanBiasa::select()->where('id',$detail->pengajuan_biasa_id)->get(),
        // ]);
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
