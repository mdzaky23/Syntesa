<?php

namespace Modules\Inventory\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Modules\Inventory\Entities\Tambahbarang;


class TambahbarangController extends Controller
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

        $nomer_inventaris = $no . '/IN/SWB/' . $cek->format('m') . '/' . $cek->format('Y');

        return view('inventory::Recordinventory.tambahbarang', [
            'nomer_inventaris' => $nomer_inventaris,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // return view('inventory::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $terbaru = Tambahbarang::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_beli);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->nomer_inventaris + 1;
        }

        // dd($request->all());
        $lampiran = $request->file('lampiran')->store('Lampiran_foto');
        if ($request->file('lampiran')) {
            $lampiran;
        }
        Tambahbarang::create([
            'nomer_inventaris' => str_replace("/IN/SWB/" . $cek->format('m') . "/" . $cek->format('Y'), "", $request->nomer_inventaris),
            'nama_brg' => $request->nama_brg,
            'jumlah_brg' => $request->jumlah_brg,
            'kategori_id' => $request->kategori_id,
            'lampiran' => $lampiran,
            'tipe_brg' => $request->tipe_brg,
            'kategori_lokasi' => $request->kategori_lokasi,
            'ruangan_lokasi' => $request->ruangan_lokasi,
            'lantai_lokasi' => $request->lantai_lokasi,
            'tgl_beli' => $request->tgl_beli,
            'tgl_peremajaan' => $request->tgl_peremajaan,
            'merk_brg' => $request->merk_brg,
            'harga_brg' => $request->harga_brg,
            'umur_ekonomi' => $request->umur_ekonomi,

        ]);

        return redirect('/inventory')->with('success', 'Data sudah terinput');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $terbaru = Tambahbarang::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_beli);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->nomer_inventaris + 1;
        }
        $nomer_invetaris = $no . '/IN/SWB/' . $cek->format('m') . '/' . $cek->format('Y');
        return view('inventory::Recordinventory.detail', [
            'barang' => Tambahbarang::select()->where('id', $id)->get()->first(),
            'nomer_inventaris' => $nomer_invetaris
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // $barang = Tambahbarang::find($id);

        return view(
            'inventory::Recordinventory.editbarang',
            [
                'barang' => Tambahbarang::select()->where('id', $id)->get()->first(),
                'barangs' => Tambahbarang::all(),
            ]
        );
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
            'nomer_inventaris' => '',
            'nama_brg' => 'required',
            'jumlah_brg' => 'required',
            'kategori_id' => 'required',
            'lampiran' => '',
            'tipe_brg' => 'required',
            'kategori_lokasi' => 'required',
            'ruangan_lokasi' => 'required',
            'lantai_lokasi' => 'required',
            'tgl_beli' => 'required',
            'tgl_peremajaan' => 'required',
            'merk_brg' => 'required',
            'harga_brg' => 'required',
            'umur_ekonomi' => 'required',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('lampiran')) {
            if ($request->oldLampiran) {
                Storage::delete($request->oldLampiran);
            }
            $validatedData['lampiran'] = $request->file('lampiran')->store('Lampiran_foto');
        }
        $input = $validatedData;
        Tambahbarang::where('id', $id)->update($input);
        return redirect('/inventory')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $barang = Tambahbarang::find($id);
        if ($barang->lampiran) {
            Storage::delete($barang->lampiran);
        }
        $barang->delete();
        return redirect('/inventory')->with('success', 'Data  Berhasil Di hapus');
    }
}
