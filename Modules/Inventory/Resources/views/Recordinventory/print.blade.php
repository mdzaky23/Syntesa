@include('inventory::layouts.header')

<body onload="window.print()">

    <div class=" col-10">
        <div class="card">
            <div class="card-header d-flex justify-content align-items-start mb-1 pb-1">

                <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="10%" alt="Logo Sayaga">
                @php
                $barang = Modules\Inventory\Entities\Tambahbarang::select()
                ->where('id', $barang->id)
                ->get()
                ->first();
                $bulan = Carbon\Carbon::parse($barang->tanggal_beli)->format('m');
                $tahun = Carbon\Carbon::parse($barang->tanggal_beli)->format('Y');
                $tanggal = Carbon\Carbon::parse($barang->tanggal_beli)->format('d-m-Y');
                @endphp

                <div>
                    <h1 class="card-title mb-1">No Inventaris : {{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</h1>
                    <h1 class="card-title mb-1">Nama Barang : {{ $barang -> nama_brg }}</h1>
                    <p class="card-text">Kategori Barang :{{ $barang -> kategori_brg }}</p>
                </div>

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url()); !!}
                    <p>{{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</p>
                </div>
                <!-- <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i> -->
            </div>

        </div>
    </div>
    <div class=" col-10">
        <div class="card">
            <div class="card-header d-flex justify-content align-items-start mb-1 pb-1">

                <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="10%" alt="Logo Sayaga">
                @php
                $barang = Modules\Inventory\Entities\Tambahbarang::select()
                ->where('id', $barang->id)
                ->get()
                ->first();
                $bulan = Carbon\Carbon::parse($barang->tanggal_beli)->format('m');
                $tahun = Carbon\Carbon::parse($barang->tanggal_beli)->format('Y');
                $tanggal = Carbon\Carbon::parse($barang->tanggal_beli)->format('d-m-Y');
                @endphp

                <div>
                    <h1 class="card-title mb-1">No Inventaris : {{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</h1>
                    <h1 class="card-title mb-1">Nama Barang : {{ $barang -> nama_brg }}</h1>
                    <p class="card-text">Kategori Barang :{{ $barang -> kategori_brg }}</p>
                </div>

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url()); !!}
                    <p>{{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</p>
                </div>
                <!-- <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i> -->
            </div>

        </div>
    </div>
    <div class=" col-10">
        <div class="card">
            <div class="card-header d-flex justify-content align-items-start mb-1 pb-1">

                <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="10%" alt="Logo Sayaga">
                @php
                $barang = Modules\Inventory\Entities\Tambahbarang::select()
                ->where('id', $barang->id)
                ->get()
                ->first();
                $bulan = Carbon\Carbon::parse($barang->tanggal_beli)->format('m');
                $tahun = Carbon\Carbon::parse($barang->tanggal_beli)->format('Y');
                $tanggal = Carbon\Carbon::parse($barang->tanggal_beli)->format('d-m-Y');
                @endphp

                <div>
                    <h1 class="card-title mb-1">No Inventaris : {{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</h1>
                    <h1 class="card-title mb-1">Nama Barang : {{ $barang -> nama_brg }}</h1>
                    <p class="card-text">Kategori Barang :{{ $barang -> kategori_brg }}</p>
                </div>

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url()); !!}
                    <p>{{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</p>
                </div>
                <!-- <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i> -->
            </div>

        </div>
    </div>
</body>
<script type="text/javascript">
    window.print();
</script>