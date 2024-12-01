@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})" ;>
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="inner-title">PROFIL PEJABAT</h1>
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
                  <tr>
                     <th scope="col" style="background-color: white;">Foto Pejabat</th>
                     <th scope="col" style="background-color: white;">Jabatan</th>
                     <th scope="col" style="background-color: white;">Nama Pejabat</th>
                     <th scope="col" style="background-color: white;">Pangkat/Gol/Ruang</th>
                     <th scope="col" style="background-color: white;">Pendidikan Terakhir</th>
                     <th scope="col" style="background-color: white;">Riwayat Jabatan</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($file as $item)
                  <tr>
                     <td><img style="width: 200px; height: auto;" src="{{ asset ('pariwisata/assets/images/kepaladinas.png') }}" alt=""></th>
                     <td>{{$item->kategori_file->nama_kategori}}</td>
                     <td>{{$item->user->email}}</td>
                     <td>{{$item->slug}}</td>
                     <td>{{$item->judul}}</td>
                     <td>{{$item->file}}</td>
                  </tr>
                  @endforeach
                  <tr>
                     <td><img style="width: 200px; height: auto;" src="{{ asset ('pariwisata/assets/images/kepaladinas2.png') }}" alt=""></th>
                     <td>Kepala Dinas</td>
                     <td>Benhur Rentandatu</td>
                     <td>Pembina/IV/a</td>
                     <td>Universitas Gajah Madha</td>
                     <td>Kepala Bidang Pengembangan Ekonomi Kreatif Dinas Pariwisata DIY</td>
                  </tr>

               </tbody>
            </table>
         </div>
      </div>
   </section>
</main>
@stop