@extends('pages.admin.masters2')
@section('content')
    @if (Auth::user()->id == $wisata->user_id || Auth::user()->role == 'admin')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{ $wisata->nama_wisata }}</h1>
                        <div class="dashboard-box table-opp-color-box">
                            {{-- <h4>{{ $title }}</h4> --}}

                            <div class="publish-action">
                            </div>
                            <h4>Total Pengunjung: {{ $totalPengunjung }}</h4>
                            <form action="{{ route('wisata.add_visitor', $wisata->id) }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="visitor_count" class="col-sm-2 col-form-label">Jumlah Pengunjung</label>
                                    <div class="col-4">
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="visitor_count"
                                                id="visitor_count" required min="1" autofocus>
                                        </div>
                                        <button type="submit" class="btn btn-success mt-2">Tambah Pengunjung</button>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Data kunjungan harian {{ $wisata->nama_wisata }}</h1>
                        <div class="dashboard-box table-opp-color-box">
                            <ul>
                                {{-- @foreach ($wisata->kunjungan_harian as $visit)
                                    <li>{{ \Carbon\Carbon::parse($visit->tanggal_kunjungan)->translatedFormat('d F Y') }}:
                                        {{ $visit->jumlah_kunjungan }} visitors</li>
                                @endforeach --}}
                                @foreach ($wisata->kunjungan_harian->filter(function ($visit) {
            return \Carbon\Carbon::parse($visit->tanggal_kunjungan)->isAfter(\Carbon\Carbon::today()->subMonth());
        }) as $visit)
                                    <li>{{ \Carbon\Carbon::parse($visit->tanggal_kunjungan)->translatedFormat('d F Y') }}:
                                        {{ $visit->jumlah_kunjungan }} visitors</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
