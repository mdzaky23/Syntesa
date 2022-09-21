<style>
    .p {
        font-family: 'calibri';
        font-size: 12px;
    }
    .li {
        font-size: 12pt;
        font-family: 'calibri';
        line-height: 1;
    }
    .tab4 {
        tab-size: 8;
    }
</style>
@php

$tanggaln = Carbon\Carbon::parse()->translatedFormat('d F Y');
$surat = Modules\Absen\Entities\Suratcuti::select()
    ->where('id', $suratcuti->id)
    ->get()
    ->first();
$tanggal = Carbon\Carbon::parse($suratcuti->tgl_cuti)->translatedFormat('d F Y');

@endphp

<body onload="window.print()">

    <table>
        <thead>
            <tr>
                <td>
                    <img class="mt-0" src="{{ asset('storage/kop_surat/Kop_surat.jpg') }}" width="100%"
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
                            <h1 style="font-size:14pt; font-family:'calibri'; color:black;"><b><u>FORMULIR PERMOHONAN CUTI PEGAWAI</u></b>
                            </h1>
                        </center>
                        <br>
                        <table style="width:65%">
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        Nama
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        : {{ $suratcuti->nama_pegawai }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        NIP
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        : {{ $suratcuti->nip }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        Jabatan
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    : {{ $suratcuti->jabatan }} {{ $suratcuti->divisi }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        Mengajukan cuti selama
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                        : {{ $suratcuti->lama_cuti }} Hari
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    Tanggal Cuti
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    : {{ $suratcuti->tgl_cuti }} s/d {{ $suratcuti->akhir_tgl_cuti}}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    Tujuan Cuti
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    : {{ $suratcuti->tujuan }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    Penyerahan tugas sementara kepada
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    : {{ $suratcuti->serah_tugas }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    Nomor yang dapat dihubungi
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size:12pt; font-family:'calibri';">
                                    : {{ $suratcuti->no_hp }}
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <br>

                        <table style="float:right">
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri'; line-height:1.2">
                                        Bogor, {{ $tanggaln }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri'; line-height:1.2">
                                        Hormat saya,
                                    </p>
                                </td>
                            </tr>
                            <tr height="70px">
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:12pt; font-family:'calibri'; text-align:right; line-height:1.2">
                                        <center>
                                            <b>
                                                <u> {{ $suratcuti->nama_pegawai }}</u>
                                            </b><br>
                                            NIP. {{ $suratcuti->nip }}
                                        </center>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <br><br><br><br><br><br><br><br><br><br>



                        <center>
                            <p style="font-size:12pt; font-family:'calibri';">
                                Menyetujui/Tidak Menyetujui <br>
                                {{ $suratcuti->jabatan_atas}} {{ $suratcuti->divisi_atas}}
                            </p>

                            <br><br>

                            <p style="font-size:12pt; font-family:'calibri';">
                                <u>{{ $suratcuti->nama_atas}}</u><br>
                                NIP. {{ $suratcuti->nip_atas}}
                            </p>
                        </center>
                        <br>

                    <table style="width:100%; border-collapse:collapse; border:1px solid black;">
                        <tr>
                            <td style="border:1px solid black;">
                                <p style="font-size:12pt; font-family:'calibri';">
                                    <b><u>&nbsp;Catatan Bagian SDM :</u></b>
                                </p>
                            </td>
                            <td style="border:1px solid black;">
                                <p style="font-size:12pt; font-family:'calibri';">
                                    <b><u>&nbsp;Catatan Atasan Langsung :</u></b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size:12pt; font-family:'calibri';">
                                &nbsp;- jumlah cuti 2022 &nbsp;: {{ $suratcuti->jumlah_cuti}} hari
                                </p>
                            </td>
                            <td rowspan="3" style="border:1px solid black;">
                                <p style="font-size:12pt; font-family:'calibri';">
                                &nbsp;{{ $suratcuti->catatan}}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size:12pt; font-family:'calibri';">
                                &nbsp;- Cuti yang diambil &nbsp;: {{ $suratcuti->ambil_cuti}} hari
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size:12pt; font-family:'calibri';">
                                &nbsp;- Sisa cuti 2022 &nbsp;: {{ $suratcuti->sisa_cuti}} hari
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

</body>


<script type="text/javascript">
    window.print();
</script>