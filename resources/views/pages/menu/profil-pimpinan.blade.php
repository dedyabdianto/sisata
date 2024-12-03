@extends('layouts.frontend.master')
@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container"
                style="background-image: url({{ asset('pariwisata/assets/images/merauke.jpg') }})" ;>
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">PROFIL PIMPINAN</h1>
                        <div class="entry-meta">
                            <span class="byline">
                                <a href="#">Demoteam</a>
                            </span>
                            <span class="posted-on">
                                <a href="#">August 17, 2021</a>
                            </span>
                            <span class="comments-link">
                                <a href="#">No Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <section class="about-section about-page-section">
            <div class="about-service-wrap">
                <div class="container">
                    <!-- content -->


                    <table class="table table-striped">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white;">Foto</th>
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white">Nama Pejabat</th>
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white">Jabatan</th>
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white">Pangkat/Gol/Ruang</th>
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white">Pendidikan Terakhir</th>
                                <th scope="col" style="background-color: rgb(46, 45, 45);color:white">Riwayat Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr style="text-align:center;">
                                    <td><span class="list-name"> <img src="{{ url(Storage::url($item->foto)) }}"
                                                alt="" style="width:50%; height: auto;"> </span></td>
                                    <td>{{ $item->nama_pejabat }}</td>
                                    <td>{{ $item->jabatan->nama_jabatan }}</td>
                                    <td>
                                        {{ $item->pangkat_golongan->pangkat_golongan }}
                                    </td>
                                    <td>{{ $item->pendidikan_terakhir }}</td>


                                    <td>
                                        @foreach (json_decode($item->riwayat_jabatan) as $riwayat)
                                            <ul>
                                                <li>
                                                    {{ $riwayat }}
                                                </li>
                                            </ul>
                                        @endforeach
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@stop
