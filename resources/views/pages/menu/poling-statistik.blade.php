@extends('layouts.frontend.master')
@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container"
                style="background-image: url({{ asset('pariwisata/assets/images/merauke.jpg') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">POLING & STATISTIK</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <!-- packages html start -->
        <section class="about-section about-page-section">
            <div class="about-service-wrap">
                <div class="container">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-12 col-xl-12 stretch-card">
                                <div class="row flex-grow-1">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Aktivitas Pengunjung Hari Ini</h5>
                
                                            <div class="activity">
                                                @foreach ($visitorsToday as $item)
                                                    <div class="activity-item d-flex">
                                                        {{ $item->nama_wisata }}
                                                        {{-- {{$item->kunjungan_harian}} --}}
                                                        @if ($item->kunjungan_harian->isNotEmpty())
                                                            <div class="activite-label">
                                                                {{-- {{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('d F Y') }} --}}
                                                            </div>
                                                            &nbsp;<i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>&nbsp;
                                                            <div class="activity-content">
                                                                <a href="#"
                                                                    class="fw-bold text-dark">{{$item->kunjungan_harian->first()->jumlah_kunjungan}} 
                                                                    Pengunjung</a>
                                                            </div>
                                                          @else
                                                          <div class="activite-label">
                                                            {{-- {{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('d F Y') }} --}}
                                                        </div>
                                                        &nbsp;<i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>&nbsp;
                                                        <div class="activity-content">
                                                            <a href="#"
                                                                class="fw-bold text-dark">0 
                                                                Pengunjung</a>
                                                        </div>

                                                        @endif
                                                    </div><!-- End activity item-->
                                                @endforeach
                
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-12 col-xl-12 stretch-card">
                                <div class="row flex-grow-1">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Aktivitas Pengunjung Harian di Seluruh Tempat Wisata
                                                </h5>
                                                <div class="activity">
                                                    @foreach ($dailyVisits as $item)
                                                        <div class="activity-item d-flex">
                                                            {{ $item->nama_wisata }}
                                                            {{ $item->kunjungan_harian }}
                                                            {{-- @if ($item->kunjungan_harian->isNotEmpty()) --}}
                                                            <div class="activite-label">
                                                                {{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('d F Y') }}
                                                            </div>
                                                            &nbsp;<i
                                                                class="bi bi-circle-fill activity-badge text-success align-self-start"></i>&nbsp;
                                                            <div class="activity-content">
                                                                <a href="#" class="fw-bold text-dark">
                                                                    {{ $item->total_visitors }}
                                                                    Pengunjung</a>
                                                            </div>
                                                        </div><!-- End activity item-->
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                        <hr>

                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Grafik Pengunjung Mingguan</h5>

                                <div style="width: 80%; margin: auto;">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div><!-- End Budget Report -->
                        <div class="row">
                            <div class="col-12 col-xl-12 grid-margin stretch-card">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title">Grafik Pengunjung Bulanan</h5>

                                            <div style="width: 80%; margin: auto;">
                                                <canvas id="lineChartBulan"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div>
                </div>
            </div>
        </section>
        <!-- packages html end -->
    </main>

    @push('js')
        <script>
            const labels = @json($labels);
            const data = @json($data);

            const ctx = document.getElementById('lineChart').getContext('2d');
            const lineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Pengunjung',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <script>
            const labelsBulan = @json($labelsBulan); // Format months like "January 2023", "February 2023"
            const dataBulan = @json($dataBulan); // Total visitors for each month

            console.log(labels); // Check if labels are correct
            console.log(data);

            const ctxBulan = document.getElementById('lineChartBulan').getContext('2d');
            const lineChartBulan = new Chart(ctxBulan, {
                type: 'bar',
                data: {
                    labels: labelsBulan,
                    datasets: [{
                        label: 'Pengunjung Bulanan',
                        data: dataBulan,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
