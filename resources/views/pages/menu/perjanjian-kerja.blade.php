@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})" ;>
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="inner-title">PERJANJIAN KERJA</h1>
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
                     <th scope="col" style="background-color: white;">Judul</th>
                     
                     <th scope="col" style="background-color: white;">File</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($data as $item)
                  @if($item->kategori_file->nama_kategori == strtoupper( 'PERJANJIAN KERJA SAMA'))
                  <tr style="text-align:center;">
                     <td>{{$item->judul}}</td>
                     
                     <td>
                        <a href="{{url(Storage::url($item->file))}}" target="_blank"><button class="btn btn-success" type="button">PDF FILE DOWNLOAD</button></a>
                    </td>
                     
                  </tr>
                  @endif
                  @endforeach

               </tbody>
            </table>
         </div>
      </div>
   </section>
</main>
@stop