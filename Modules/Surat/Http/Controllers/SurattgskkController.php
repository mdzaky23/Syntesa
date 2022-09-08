<?php

namespace Modules\Surat\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Surat\Entities\Surattgskk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class SurattgskkController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $terbaru = Surattgskk::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_surattgskk);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->no_surattgskk + 1;
        }

        $no_surattgskk = $no . '/A/SWB-SDKK/' . $cek->format('m') . '/' . $cek->format('Y');
        return view('surat::buatsurat.surattgskk.index', [
            'surattgskks' => Surattgskk::all(),
            'no_surattgskk' => $no_surattgskk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('surat::buatsurat.surattgskk.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $terbaru = Surattgskk::select()->latest()->first();
        $cek = Carbon::parse($terbaru->tgl_surattgskk);

        if ($cek->format('Y') != Carbon::now()->format('Y')) {
            $no = 1;
        } elseif ($cek->format('Y') == Carbon::now()->format('Y')) {
            $no = $terbaru->no_surattgskk + 1;
        }
        $dokumen = $request->file('dokumen')->store('dok_surattgskk');
        if ($request->file('dokumen')) {
            $dokumen;
        }

        Surattgskk::create([
            'no_surattgskk' => str_replace("/A/SWB-SDKK/" . $cek->format('m') . "/" . $cek->format('Y'), "", $request->no_surattgskk),
            'tgl_surattgskk' => $request->tgl_surattgskk,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
            'instansi' => $request->instansi,
            'dokumen' => $dokumen,
        ]);


        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('surat::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $surattgskk = Surattgskk::find($id);
        return view('surat::buatsurat.surattgskk.editarsip', compact('surattgskk'));
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
            'no_surattgskk' => 'required',
            'tgl_surattgskk' => 'required',
            'instansi' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
            'dokumen' => '',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('dokumen')) {
            if ($request->oldDokumen) {
                Storage::delete($request->oldDokumen);
            }
            $validatedData['dokumen'] = $request->file('dokumen')->store('dok_surattgskk');
        }
        $input = $validatedData;
        Surattgskk::where('id', $id)->update($input);

        return redirect('/surat/surattgskk')->with('success', 'Data berhasil diupdate!');
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
