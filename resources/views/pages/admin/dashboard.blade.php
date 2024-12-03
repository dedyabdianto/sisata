@extends('pages.admin.masters2')
@section('content')
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Total Pengunjung <span>| hari ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$totalVisitorsToday}}</h6>
                                        <span class="text-primary small pt-1 fw-bold">Orang</span> 
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

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

                            <div class="card-body">
                                <h5 class="card-title">Lokasi Wisata <span>| total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-pin-map"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $lokasiWisata }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->
                    @foreach ($kategori_wisata as $item)
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

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

                                <div class="card-body">
                                    <h5 class="card-title">Kategori {{ $item->nama_kategori }}</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-pin-map"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $item->wisata_count }} </h6>
                                            <span class="text-success small pt-1 fw-bold">Tempat Wisata</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                        
                    @endforeach
                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

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

                            <div class="card-body">
                                <h5 class="card-title">Operator <span>| pengelola wisata</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$operator}}</h6>
                                        <span class="text-danger small pt-1 fw-bold">Orang</span> 

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

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
                                            <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                            <div class="activity-content">
                                                <a href="#"
                                                    class="fw-bold text-dark">{{ $item->kunjungan_harian->first()->jumlah_kunjungan }}
                                                    Pengunjung</a>
                                            </div>
                                        @endif
                                    </div><!-- End activity item-->
                                @endforeach

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

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
                        <div class="card-body">
                            <h5 class="card-title">Aktivitas Pengunjung Harian di Seluruh Tempat Wisata</h5>
                            <div class="activity">
                                @foreach ($dailyVisits as $item)
                                    <div class="activity-item d-flex">
                                        {{ $item->nama_wisata }}
                                        {{ $item->kunjungan_harian }}
                                        {{-- @if ($item->kunjungan_harian->isNotEmpty()) --}}
                                        <div class="activite-label">
                                            {{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('d F Y') }}
                                        </div>
                                        <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                        <div class="activity-content">
                                            <a href="#" class="fw-bold text-dark"> {{ $item->total_visitors }}
                                                Pengunjung</a>
                                        </div>
                                    </div><!-- End activity item-->
                                @endforeach
                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
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

                    <!-- Budget Report -->
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
                            <h5 class="card-title">Grafik Pengunjung Bulanan</h5>

                            <div style="width: 80%; margin: auto;">
                                <canvas id="lineChartBulan"></canvas>
                            </div>
                        </div>
                    </div><!-- End Budget Report -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

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
