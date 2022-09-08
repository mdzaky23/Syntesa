<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\Biaya;
use Modules\Project\Entities\Project;
use Modules\Project\Entities\Kategori;
use Modules\Project\Entities\Lampiran;
use Illuminate\Support\Facades\Storage;
use Modules\Project\Entities\Pengajuan;
use Modules\Project\Entities\Pendapatan;
use Illuminate\Contracts\Support\Renderable;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $project = Project::select()->get();
        $project->load(['lampiran', 'biaya', 'pendapatan']);
        // return $project;
        return view('project::pengajuan.index', [
            'projects' => $project,
            'kategoris' => Kategori::all(),
            // 'lampiran'=> Lampiran::select()->where('id', request('id'))->get()->first(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('project::pengajuan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        extract($request->all());
        
        $so="";
        if ($request->file('sales_order')) {
            $so = $request->file('sales_order')->store('public/sales_order_project');
        }
           $project= Project::create([
                'no_project' => $request->no_project,
                'pemegang_project' => $request->pemegang_project,
                'tgl_project' => $request->tgl_project,
                'nama_project' => $request->nama_project,
                'sales_order' => $so,
                'deskripsi' => $request->deskripsi,
            ]);
        
        if($kategori_biaya??false){
            foreach ($kategori_biaya as $key=>$val) {
            $total = $jumlah_biaya[$key] * $biaya_satuan_biaya[$key] * $waktu_biaya[$key];
            $project->biaya()->create([
                'kategori' => $kategori_biaya[$key],
                'item' => $item_biaya[$key],
                'jumlah' => $jumlah_biaya[$key],
                'waktu' => $waktu_biaya[$key],
                'biaya_satuan' => $biaya_satuan_biaya[$key],
                'total_biaya' => $total,
            ]);
        }
        }
        if($kategori_pendapatan??false){
            foreach ($kategori_pendapatan as $kp => $value) {
                $total = $jumlah_pendapatan[$kp] * $pendapatan_satuan[$kp] * $waktu_pendapatan[$kp];
                $project->pendapatan()->create([
                    'kategori' => $kategori_pendapatan[$kp],
                    'item' => $item_pendapatan[$kp],
                    'jumlah' => $jumlah_pendapatan[$kp],
                    'waktu' => $waktu_pendapatan[$kp],
                    'pendapatan_satuan' => $pendapatan_satuan[$kp],
                    'total_pendapatan' => $total,
                ]);
            }
        }

        if ($kategori_lampiran??false ) {

                    foreach ($kategori_lampiran as $ke => $val) {
                        if($val=='Tiket'){
                            $dokumen = @$dokumen_lampiran_Tiket;
                        }else if($val=='Hotel'){
                            $dokumen = @$dokumen_lampiran_Hotel;
                        }else if($val=='Transport'){
                            $dokumen = @$dokumen_lampiran_Transport;
                        }
                        $arrDoc=[];
                        if($dokumen ?? false){
                            foreach ($dokumen as $k => $v) {
                                $arrDoc[]=$v->store('public/dokumen_project');
                            }
                        }
                        
                        if(isset($arrDoc) && !empty($arrDoc)){
                            $dt=[
                                'kategori' => $kategori_lampiran[$ke],
                                'dokumen' => json_encode($arrDoc),
                                'keterangan' => $keterangan_lampiran[$ke],
                            ];
                            
                        }else{
                            $dt=[
                                'kategori' => $kategori_lampiran[$ke],
                                'keterangan' => $keterangan_lampiran[$ke],
                            ];
                        }
                        $project->lampiran()->create($dt);
                    }
                
            
        }




        return redirect('project/pengajuan');
    }

    public function lampiran($id)
    {
        $dt=Lampiran::find($id);
        $docs=json_decode($dt->dokumen,true);
        foreach ($docs as $d) {
            $img=asset('storage/' .str_replace('public/','',$d) );
            echo '<img src="'.$img.'">';
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('project::pengajuan.index', [
            'lampiran' => Lampiran::select()->where('id', request('id'))->get()->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Project $pengajuan)
    {
        $project= $pengajuan;
        return view('project::pengajuan.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Project $pengajuan)
    {
         extract($request->all());
        $project=$pengajuan;
        $dtProject=[
                'no_project' => $request->no_project,
                'pemegang_project' => $request->pemegang_project,
                'tgl_project' => $request->tgl_project,
                'nama_project' => $request->nama_project,
                'deskripsi' => $request->deskripsi,
        ];
        if ($request->hasFile('sales_order')) {
            $dtProject['sales_order'] = $request->file('sales_order')->store('public/sales_order_project');
        }
        $project->update($dtProject);
        // hapus dulu biaya, pendapatan
        $project->biaya()->delete();
        $project->pendapatan()->delete();
        if($kategori_biaya??false){
            foreach ($kategori_biaya as $key=>$val) {
            $total = $jumlah_biaya[$key] * $biaya_satuan_biaya[$key] * $waktu_biaya[$key];
            $project->biaya()->create([
                'kategori' => $kategori_biaya[$key],
                'item' => $item_biaya[$key],
                'jumlah' => $jumlah_biaya[$key],
                'waktu' => $waktu_biaya[$key],
                'biaya_satuan' => $biaya_satuan_biaya[$key],
                'total_biaya' => $total,
            ]);
        }
        }
        if($kategori_pendapatan??false){
            foreach ($kategori_pendapatan as $kp => $value) {
                $total = $jumlah_pendapatan[$kp] * $pendapatan_satuan[$kp] * $waktu_pendapatan[$kp];
                $project->pendapatan()->create([
                    'kategori' => $kategori_pendapatan[$kp],
                    'item' => $item_pendapatan[$kp],
                    'jumlah' => $jumlah_pendapatan[$kp],
                    'waktu' => $waktu_pendapatan[$kp],
                    'pendapatan_satuan' => $pendapatan_satuan[$kp],
                    'total_pendapatan' => $total,
                ]);
            }
        }

        if ($kategori_lampiran??false ) {

                    foreach ($kategori_lampiran as $ke => $val) {
                        if($val=='Tiket'){
                            $dokumen = @$dokumen_lampiran_Tiket;
                        }else if($val=='Hotel'){
                            $dokumen = @$dokumen_lampiran_Hotel;
                        }else if($val=='Transport'){
                            $dokumen = @$dokumen_lampiran_Transport;
                        }
                        $arrDoc=[];
                        if($dokumen ?? false){
                            foreach ($dokumen as $k => $v) {
                                $arrDoc[]=$v->store('public/dokumen_project');
                            }
                        }
                        if(isset($arrDoc) && !empty($arrDoc)){
                            $dt=[
                                'kategori' => $kategori_lampiran[$ke],
                                'dokumen' => json_encode($arrDoc),
                                'keterangan' => $keterangan_lampiran[$ke],
                            ];
                            
                        }else{
                            $dt=[
                                'kategori' => $kategori_lampiran[$ke],
                                'keterangan' => $keterangan_lampiran[$ke],
                            ];
                        }
                        $idlampiran=@$id_lampiran[$ke];
                        if(isset($idlampiran)){
                            $project->lampiran()->whereNotIn('id',$id_lampiran)->delete();
                            $project->lampiran()->where('id',$idlampiran)->update($dt);
                        }else{
                            $project->lampiran()->create($dt);
                        }
                        
                        
                    }
                
            
        }




        return redirect('project/pengajuan');
    }

    public function hapusBiaya($id)
    {
        Biaya::where('id',$id)->delete();
        return response()->json([
                'status' => 'success',
                'id'=>$id,
            ]);
    }
    public function hapusPendapatan($id)
    {
        Pendapatan::where('id',$id)->delete();
        return response()->json([
                'status' => 'success',
                'id'=>$id,
            ]);
    }
    public function hapusLampiran($id)
    {
        Lampiran::where('id',$id)->delete();
        return response()->json([
                'status' => 'success',
                'id'=>$id,
            ]);
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->biaya()->delete();
        $project->pendapatan()->delete();
        $project->lampiran()->delete();
        $project->delete();
        return redirect('/project/pengajuan');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Biaya::class, 'kategori', $request->kategori);
    //     return response()->json(['kategori' => $slug]);
    // }
}
