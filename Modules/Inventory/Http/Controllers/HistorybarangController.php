<?php

namespace Modules\Inventory\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Inventory\Entities\HistoryInventory;
use Modules\Inventory\Entities\KategoriBarang;
use Modules\Inventory\Entities\Tambahbarang;

class HistorybarangController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $terbaru = Tambahbarang::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_beli);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->nomer_inventaris + 1;
        }
        $nomer_invetaris = $no . '/IN/SWB/' . $cek->format('m') . '/' . $cek->format('Y');


        $jumlah_brg = Tambahbarang::all()->count();
        return view('inventory::History.index', [
            'nomer_inventaris' => $nomer_invetaris,
            'barangs' => Tambahbarang::all(),
            'kategori_barangs' => KategoriBarang::all(),
            'history' => HistoryInventory::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('inventory::create');
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
        return view('inventory::History.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('inventory::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        HistoryInventory::create([
            'tambahbarang_id' => $id,
            'status' => $request->status,

        ]);
        return redirect('/inventory')->with('success', 'Data Berhasil Di Ubah');
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
