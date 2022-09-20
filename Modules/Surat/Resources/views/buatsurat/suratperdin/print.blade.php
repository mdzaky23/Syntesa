@include('surat::layouts.head')
<style>
    .p {
        font-family: 'Times New Roman';
        font-size: 12px;
    }

    .li {
        font-size: 12pt;
        font-family: 'Times New Roman';
        line-height: 1;
    }
</style>
@php
$hari = Carbon\Carbon::now();
$surat = Modules\Surat\Entities\Suratperdin::select()
    ->where('id', $suratperdin->id)
    ->get()
    ->first();
$bulan = Carbon\Carbon::parse($surat->tgl_suratperdin)->format('m');
$tahun = Carbon\Carbon::parse($surat->tgl_suratperdin)->format('Y');
$tanggal = Carbon\Carbon::parse($surat->tgl_suratperdin)->translatedFormat('d F Y');
$waktumulai = Carbon\Carbon::parse($surat->waktu_mulai)->translatedFormat('d F Y');
$waktuselesai = Carbon\Carbon::parse($surat->waktu_selesai)->translatedFormat('d F Y');
$array_bln = [
    '01' => 'I',
    '02' => 'II',
    '03' => 'III',
    '04' => 'IV',
    '05' => 'V',
    '06' => 'VI',
    '07' => 'VII',
    '08' => 'VIII',
    '09' => 'IX',
    '10' => 'X',
    '11' => 'XI',
    '12' => 'XII',
];
$bln = $array_bln[$bulan];
$nosurat = sprintf('%03d', $suratperdin->no_suratperdin);
// dirut
$saku1 = $suratperdin->jml_hari * 1500000;
// dir umum
$saku2 = $suratperdin->jml_hari * 1400000;
// dir operasional
$saku3 = $suratperdin->jml_hari * 1400000;
// manager
$saku4 = $suratperdin->jml_hari * 400000;
// kepala divisi
$saku5 = $suratperdin->jml_hari * 400000;
// junior manager
$saku6 = $suratperdin->jml_hari * 250000;
// staff
$saku7 = $suratperdin->jml_hari * 125000;

// dirut
$representatif1 = $suratperdin->jml_hari * 750000;
// dir umum
$representatif2 = $suratperdin->jml_hari * 500000;
// dir operasional
$representatif3 = $suratperdin->jml_hari * 500000;

$jumlah1 = $saku1 + $representatif1;
$jumlah2 = $saku2 + $representatif2;
$jumlah3 = $saku3 + $representatif3;
$jumlah4 = $saku4;
$jumlah5 = $saku5;
$jumlah6 = $saku6;
$jumlah7 = $saku7;

@endphp

<body onload="window.print()">

    <table>
        <thead>
            <tr>
                <td>
                    <img class="mt-0" src="{{ asset('storage/kop_surat/Kop_sayaga.png') }}" width="100%"
                        alt="PT Sayaga Wisata Bogor">
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <br>
                    <div class="col-lg-10 px-3">
                        <center>
                            <h1 style="font-size:16pt; font-family:'Times New Roman'; color:black;"><b><u>SURAT
                                        PERINTAH DINAS</u></b>
                            </h1>
                        </center>
                        <center>
                            <p style="font-size:12pt; font-family:'Times New Roman';">
                                <b><u>SPD
                                        No.{{ $nosurat }}/A/SWB-SPD/{{ $bln }}/{{ $tahun }}</u></b>
                            </p>
                        </center>
                        <br>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.5"><b>Diperintahkan
                                Kepada</b></p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.5"><b>Nama/NIP&emsp;: </b>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($suratperdin->nama1 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                1. {{ $suratperdin->nama1 }}</p>
                                        @endif
                                        @if ($suratperdin->nama2 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                2. {{ $suratperdin->nama2 }}</p>
                                        @endif
                                        @if ($suratperdin->nama3 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                3. {{ $suratperdin->nama3 }}</p>
                                        @endif
                                        @if ($suratperdin->nama4 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                4. {{ $suratperdin->nama4 }}</p>
                                        @endif
                                        @if ($suratperdin->nama5 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                5. {{ $suratperdin->nama5 }}</p>
                                        @endif
                                        @if ($suratperdin->nama6 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                6. {{ $suratperdin->nama6 }}</p>
                                        @endif
                                        @if ($suratperdin->nama7 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                7. {{ $suratperdin->nama7 }}</p>
                                        @endif
                                        @if ($suratperdin->nama8 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                8. {{ $suratperdin->nama8 }}</p>
                                        @endif
                                        @if ($suratperdin->nama9 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                9. {{ $suratperdin->nama9 }}</p>
                                        @endif
                                        @if ($suratperdin->nama10 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                10. {{ $suratperdin->nama10 }}</p>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        @if ($suratperdin->nama11 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                11. {{ $suratperdin->nama11 }}</p>
                                        @endif
                                        @if ($suratperdin->nama12 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                12. {{ $suratperdin->nama12 }}</p>
                                        @endif
                                        @if ($suratperdin->nama13 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                13. {{ $suratperdin->nama13 }}</p>
                                        @endif
                                        @if ($suratperdin->nama14 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                14. {{ $suratperdin->nama14 }}</p>
                                        @endif
                                        @if ($suratperdin->nama15 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                15. {{ $suratperdin->nama15 }}</p>
                                        @endif
                                        @if ($suratperdin->nama16 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                16. {{ $suratperdin->nama16 }}</p>
                                        @endif
                                        @if ($suratperdin->nama17 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                17. {{ $suratperdin->nama17 }}</p>
                                        @endif
                                        @if ($suratperdin->nama18 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                18. {{ $suratperdin->nama18 }}</p>
                                        @endif
                                        @if ($suratperdin->nama19 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                19. {{ $suratperdin->nama19 }}</p>
                                        @endif
                                        @if ($suratperdin->nama20 != '-Pilih-')
                                            <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.25">
                                                20. {{ $suratperdin->nama20 }}</p>
                                        @endif
                                    </td> --}}

                                </tr>
                            </tbody>
                        </table>
                        </p>

                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.5">
                            <b>Untuk &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp; : </b>
                            {{ $suratperdin->untuk }}
                        </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:0.5"><b>Waktu Pelaksanaan
                                :</b> {{ $waktumulai }} Sampai {{ $waktuselesai }}
                        </p>

                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2">Catatan :
                        </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2">1. Melaksanakan
                            Perintah ini dengan seksama dan penuh rasa tanggung
                            jawab.</p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2">2. Sebelum dan sesudah
                            melaksanakan Perintah ini, agar melapor kepada
                            Direktur Umum & Keuangan. </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2">3. Pembebanan biaya
                            ini sesuai dengan surat keputusan direksi </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; line-height:1.2"><b>Pengesahan
                                Tujuan : </b></p>
                        <br>
                        <br>

                        <p style="font-size:12pt; font-family:'Times New Roman'; text-align:right; line-height:1.2">
                            Dikeluarkan di :
                            Cibinong </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; text-align:right; line-height:1.2">
                            <u> Tanggal : {{ $tanggal }} <u />
                        </p>

                        <p
                            style="font-size:12pt;
                            font-family:'Times New Roman'; text-align:right; line-height:1.2">
                            <b>{{ $suratperdin->tertanda }}</b>
                        </p>
                        @if ($suratperdin->ttd == '1')
                            <img class="mt-0" align="right" src="{{ asset('storage/ttd/dirut.png') }}"
                                width="10%">
                            <br><br><br><br>
                        @elseif ($suratperdin->ttd == '2')
                            <img class="mt-0" align="right" src="{{ asset('storage/ttd/dirum.jpg') }}"
                                width="15%">
                            <br><br><br><br><br>
                        @elseif ($suratperdin->ttd == '3')
                            <img class="mt-0" align="right" src="{{ asset('storage/ttd/dirop.png') }}"
                                width="15%">
                            <br><br><br><br><br>
                        @else
                            <br>
                            <br><br>
                            <br>
                        @endif
                        <p style="font-size:12pt; font-family:'Times New Roman'; text-align:right; line-height:1.2">
                            <b>
                                <font size="3" face="Times" style="align:right; line-height:1.2">
                                    <u> {{ $suratperdin->tertanda2 }}</u>
                                </font>
                            </b>
                        </p>
                        <p style="font-size:12pt; font-family:'Times New Roman'; text-align:right; line-height:1.2">
                            <b>
                                <font size="3" face="Times" style="align:right; line-height:1.2">
                                    {{ $suratperdin->tertanda3 }}
                                </font>
                            </b>
                        </p>
                        <br>
                    </div>
                </td>
            </tr>
            {{-- <img src="{{ asset('storage/' . $suratmasuk->dokumen) }}" height="30%" width="10%" alt=""> --}}


            {{-- Uang Perjalanan Dinas --}}
            <tr>
                <td>
                    @if ($suratperdin->jabatan4 == '-Pilih-')
                        <br>
                    @else
                        <br> <br> <br><br><br><br>
                    @endif
                    <div class="col-lg-10 px-3">
                        <center>
                            <h1 style="font-size:16pt; font-family:'Times New Roman'; color:black;"><b><u>UANG
                                        PERJALANAN DINAS</u></b>
                            </h1>
                        </center>
                        <center>
                            <p style="font-size:12pt; font-family:'Times New Roman';">
                                <b><u>SPD
                                        No.{{ $nosurat }}/A/SWB-SPD/{{ $bln }}/{{ $tahun }}</u></b>
                            </p>
                        </center>

                        {{-- Nama 1 --}}
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Direktur Utama')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1500000 </td>
                                            <td> = Rp. {{ $saku1 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 750000 </td>
                                            <td> = Rp. {{ $representatif1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah1 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Direktur Umum dan Keuangan')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku2 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah2 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Direktur Operasional')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku3 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah3 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku4 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah4 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Kepala Divisi')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku5 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah5 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama1))
                            @if ($suratperdin->nama1 != '-Pilih-' && $suratperdin->jabatan1 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    1. {{ $suratperdin->nama1 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 2 --}}
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Direktur Utama')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1500000 </td>
                                            <td> = Rp. {{ $saku1 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 750000 </td>
                                            <td> = Rp. {{ $representatif1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah1 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Direktur Umum dan Keuangan')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku2 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah2 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Direktur Operasional')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku3 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah3 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku4 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah4 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Kepala Divisi')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku5 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah5 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama2))
                            @if ($suratperdin->nama2 != '-Pilih-' && $suratperdin->jabatan2 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    2. {{ $suratperdin->nama2 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 3 --}}
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Direktur Utama')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1500000 </td>
                                            <td> = Rp. {{ $saku1 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 750000 </td>
                                            <td> = Rp. {{ $representatif1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah1 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Direktur Umum dan Keuangan')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku2 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah2 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Direktur Operasional')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku3 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah3 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku4 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah4 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Kepala Divisi')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku5 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah5 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama3))
                            @if ($suratperdin->nama3 != '-Pilih-' && $suratperdin->jabatan3 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    3. {{ $suratperdin->nama3 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 4 --}}
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Direktur Utama')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1500000 </td>
                                            <td> = Rp. {{ $saku1 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 750000 </td>
                                            <td> = Rp. {{ $representatif1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah1 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Direktur Umum dan Keuangan')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku2 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah2 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Direktur Operasional')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku3 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah3 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku4 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah4 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Kepala Divisi')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku5 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah5 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama4))
                            @if ($suratperdin->nama4 != '-Pilih-' && $suratperdin->jabatan4 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    4. {{ $suratperdin->nama4 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 5 --}}
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Direktur Utama')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1500000 </td>
                                            <td> = Rp. {{ $saku1 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 750000 </td>
                                            <td> = Rp. {{ $representatif1 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah1 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Direktur Umum dan Keuangan')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku2 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif2 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah2 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Direktur Operasional')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 1400000 </td>
                                            <td> = Rp. {{ $saku3 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 500000 </td>
                                            <td> = Rp. {{ $representatif3 }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah3 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku4 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah4 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Kepala Divisi')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 400000 </td>
                                            <td> = Rp. {{ $saku5 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah5 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama5))
                            @if ($suratperdin->nama5 != '-Pilih-' && $suratperdin->jabatan5 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    5. {{ $suratperdin->nama5 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 6 --}}
                        @if (!empty($suratperdin->nama6))
                            @if ($suratperdin->nama6 != '-Pilih-' && $suratperdin->jabatan6 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    6. {{ $suratperdin->nama6 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama6))
                            @if ($suratperdin->nama6 != '-Pilih-' && $suratperdin->jabatan6 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    6. {{ $suratperdin->nama6 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 7 --}}
                        @if (!empty($suratperdin->nama7))
                            @if ($suratperdin->nama7 != '-Pilih-' && $suratperdin->jabatan7 == 'Junior Manager')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    7. {{ $suratperdin->nama7 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 250000 </td>
                                            <td> = Rp. {{ $saku6 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah6 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif
                        @if (!empty($suratperdin->nama7))
                            @if ($suratperdin->nama7 != '-Pilih-' && $suratperdin->jabatan7 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    7. {{ $suratperdin->nama7 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 8 --}}
                        @if (!empty($suratperdin->nama8))
                            @if ($suratperdin->nama8 != '-Pilih-' && $suratperdin->jabatan8 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    8. {{ $suratperdin->nama8 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 9 --}}
                        @if (!empty($suratperdin->nama9))
                            @if ($suratperdin->nama9 != '-Pilih-' && $suratperdin->jabatan9 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    9. {{ $suratperdin->nama9 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 10 --}}
                        @if (!empty($suratperdin->nama10))
                            @if ($suratperdin->nama10 != '-Pilih-' && $suratperdin->jabatan10 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama10 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        {{-- Nama 11 --}}
                        {{-- @if (!empty($suratperdin->nama11))
                            @if ($suratperdin->nama11 != '-Pilih-' && $suratperdin->jabatan11 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama11 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 12 --}}
                        {{-- @if (!empty($suratperdin->nama12))
                            @if ($suratperdin->nama12 != '-Pilih-' && $suratperdin->jabatan12 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama12 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 13 --}}
                        {{-- @if (!empty($suratperdin->nama13))
                            @if ($suratperdin->nama13 != '-Pilih-' && $suratperdin->jabatan13 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama13 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 14 --}}
                        {{-- @if (!empty($suratperdin->nama14))
                            @if ($suratperdin->nama14 != '-Pilih-' && $suratperdin->jabatan14 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama14 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 15 --}}
                        {{-- @if (!empty($suratperdin->nama15))
                            @if ($suratperdin->nama15 != '-Pilih-' && $suratperdin->jabatan15 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama15 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 16 --}}
                        {{-- @if (!empty($suratperdin->nama16))
                            @if ($suratperdin->nama16 != '-Pilih-' && $suratperdin->jabatan16 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama16 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 17 --}}
                        {{-- @if (!empty($suratperdin->nama17))
                            @if ($suratperdin->nama17 != '-Pilih-' && $suratperdin->jabatan17 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama17 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 18 --}}
                        {{-- @if (!empty($suratperdin->nama18))
                            @if ($suratperdin->nama18 != '-Pilih-' && $suratperdin->jabatan18 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama18 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 19 --}}
                        {{-- @if (!empty($suratperdin->nama19))
                            @if ($suratperdin->nama19 != '-Pilih-' && $suratperdin->jabatan19 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama19 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}

                        {{-- Nama 20 --}}
                        {{-- @if (!empty($suratperdin->nama20))
                            @if ($suratperdin->nama20 != '-Pilih-' && $suratperdin->jabatan20 == 'Staff')
                                <p
                                    style="font-size:12pt; font-family:'Times New Roman'; text-align:left; line-height:1">
                                    10. {{ $suratperdin->nama20 }}</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Penginapan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Transportasi</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Uang Makan</td>
                                            <td>:</td>
                                            <td> Hari</td>
                                            <td>X</td>
                                            <td>Rp. </td>
                                            <td> = Rp. </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Uang Saku</td>
                                            <td>:</td>
                                            <td>{{ $suratperdin->jml_hari }} Hari</td>
                                            <td>X</td>
                                            <td>Rp. 125000 </td>
                                            <td> = Rp. {{ $saku7 }} </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Uang Representatif</td>
                                            <td>:</td>
                                            <td>Hari</td>
                                            <td>X</td>
                                            <td> </td>
                                            <td> = Rp.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>Jumlah</b></td>
                                            <td>:</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b> = Rp. {{ $jumlah7 }} </b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        @endif --}}
                        @if ($suratperdin->jabatan2 == '-Pilih-')
                            @php
                                $total = $jumlah1;
                            @endphp
                        @elseif ($suratperdin->jabatan3 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2;
                            @endphp
                        @elseif ($suratperdin->jabatan4 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3;
                            @endphp
                        @elseif ($suratperdin->jabatan5 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4;
                            @endphp
                        @elseif ($suratperdin->jabatan6 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5;
                            @endphp
                        @elseif ($suratperdin->jabatan7 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6;
                            @endphp
                        @elseif ($suratperdin->jabatan8 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7;
                            @endphp
                        @elseif ($suratperdin->jabatan9 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7 + $jumlah7;
                            @endphp
                        @elseif ($suratperdin->jabatan10 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7 + $jumlah7 + $jumlah7;
                            @endphp
                        @elseif ($suratperdin->jabatan11 == '-Pilih-')
                            @php
                                $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7 + $jumlah7 + $jumlah7 + $jumlah7;
                            @endphp
                        @endif
                        {{-- <img src="{{ asset('storage/' . $suratmasuk->dokumen) }}" height="30%" width="10%" alt=""> --}}
                        <p><b>Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Rp.
                                {{ number_format($total) }}

                            </b></p>
                        <table>
                            <thead>
                                <tr>
                                    <th style="border: 1px solid black;">
                                        Diajukan Oleh : &nbsp;
                                    </th>
                                    <th style="border: 1px solid black;">
                                        Diperiksa Oleh : &nbsp;
                                    </th>
                                    <th style="border: 1px solid black;">
                                        Disetujui Oleh : &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;">
                                        <br><br><br>
                                    </td>
                                    <td style="border: 1px solid black;"><br><br><br></td>
                                    <td style="border: 1px solid black;"><br><br><br></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">
                                        Tanggal:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                    <td style="border: 1px solid black;">
                                        Tanggal:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                    <td style="border: 1px solid black;">
                                        Tanggal:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>


<script type="text/javascript">
    window.print();
</script>
