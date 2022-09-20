<?php

namespace Modules\Surat\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Surat\Entities\Datapegawai;
use Modules\Surat\Entities\Suratperdin;
use Illuminate\Contracts\Support\Renderable;

class PrintperdinController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('surat::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('surat::buatsurat.suratperdin.create', [
            'datapegawais' => Datapegawai::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $terbaru = Suratperdin::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_suratperdin);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->no_suratperdin + 1;
        }

        Suratperdin::create([
            'no_suratperdin' => str_replace("/A/SWB-SPD/" . $cek->format('m') . "/" . $cek->format('Y'), "", $request->no_suratperdin),
            'tgl_suratperdin' => $request->tgl_suratperdin,
            'dasar' => $request->dasar,
            'nama1' => $request->nama1,
            'nama2' => $request->nama2,
            'nama3' => $request->nama3,
            'nama4' => $request->nama4,
            'nama5' => $request->nama5,
            'nama6' => $request->nama6,
            'nama7' => $request->nama7,
            'nama8' => $request->nama8,
            'nama9' => $request->nama9,
            'nama10' => $request->nama10,
            'nama11' => $request->nama11,
            'nama12' => $request->nama12,
            'nama13' => $request->nama13,
            'nama14' => $request->nama14,
            'nama15' => $request->nama15,
            'nama16' => $request->nama16,
            'nama17' => $request->nama17,
            'nama18' => $request->nama18,
            'nama19' => $request->nama19,
            'nama20' => $request->nama20,
            'jabatan1' => $request->jabatan1,
            'jabatan2' => $request->jabatan2,
            'jabatan3' => $request->jabatan3,
            'jabatan4' => $request->jabatan4,
            'jabatan5' => $request->jabatan5,
            'jabatan6' => $request->jabatan6,
            'jabatan7' => $request->jabatan7,
            'jabatan8' => $request->jabatan8,
            'jabatan9' => $request->jabatan9,
            'jabatan10' => $request->jabatan10,
            'jabatan11' => $request->jabatan11,
            'jabatan12' => $request->jabatan12,
            'jabatan13' => $request->jabatan13,
            'jabatan14' => $request->jabatan14,
            'jabatan15' => $request->jabatan15,
            'jabatan16' => $request->jabatan16,
            'jabatan17' => $request->jabatan17,
            'jabatan18' => $request->jabatan18,
            'jabatan19' => $request->jabatan19,
            'jabatan20' => $request->jabatan20,
            'untuk' => $request->untuk,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'jml_hari' => $request->jml_hari,
            'tertanda' => $request->tertanda,
            'tertanda2' => $request->tertanda2,
            'tertanda3' => $request->tertanda3,
            'ttd' => '',
        ]);

        return redirect('/surat/suratperdin')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('surat::buatsurat.suratperdin.print', [
            'suratperdin' => Suratperdin::select()->where('id', $id)->get()->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $suratperdin = Suratperdin::find($id);
        $datapegawais = Datapegawai::all();
        return view('surat::buatsurat.suratperdin.edit', compact('suratperdin', 'datapegawais'));
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
            'tgl_suratperdin' => 'required',
            'no_suratperdin' => 'required',
            'dasar' => 'required',
            'nama1' => '',
            'nama2' => '',
            'nama3' => '',
            'nama4' => '',
            'nama5' => '',
            'nama6' => '',
            'nama7' => '',
            'nama8' => '',
            'nama9' => '',
            'nama10' => '',
            'nama11' => '',
            'nama12' => '',
            'nama13' => '',
            'nama14' => '',
            'nama15' => '',
            'nama16' => '',
            'nama17' => '',
            'nama18' => '',
            'nama19' => '',
            'nama20' => '',
            'jabatan1' => '',
            'jabatan2' => '',
            'jabatan3' => '',
            'jabatan4' => '',
            'jabatan5' => '',
            'jabatan6' => '',
            'jabatan7' => '',
            'jabatan8' => '',
            'jabatan9' => '',
            'jabatan10' => '',
            'jabatan11' => '',
            'jabatan12' => '',
            'jabatan13' => '',
            'jabatan14' => '',
            'jabatan15' => '',
            'jabatan16' => '',
            'jabatan17' => '',
            'jabatan18' => '',
            'jabatan19' => '',
            'jabatan20' => '',
            'untuk' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'jml_hari' => 'required',
            'tertanda' => 'required',
            'tertanda2' => 'required',
            'tertanda3' => 'required',
            'ttd' => '',
        ];

        $validatedData = $request->validate($rules);

        $input = $validatedData;
        Suratperdin::where('id', $id)->update($input);

        return redirect('/surat/suratperdin')->with('success', 'Data berhasil diupdate');
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
