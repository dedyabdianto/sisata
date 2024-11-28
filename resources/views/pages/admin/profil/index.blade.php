@extends('pages.admin.masters2')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="dashboard-box table-opp-color-box">
                        
                        {{-- <h4>{{ $title }}</h4> --}}
                        @if($data)
                        <form class="row g-3" action="{{ route('profil.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="col-12">
                            <label for="nama_kadis" class="form-label">Nama Kadis</label>
                            <input type="text" class="form-control" id="nama_kadis" name="nama_kadis" value="{{$data->nama_kadis}}">
                        </div>
                        <div class="col-12">
                            <label for="foto_kadis" class="form-label">Foto Kadis</label> <br>
                            <center><img src="{{url(Storage::url ($data->foto_kadis))}}"  alt="" style="width:30%; height: auto;"></center><br><br>
                            <input type="file" class="form-control" id="foto_kadis" name="foto_kadis" value={{$data->foto_kadis}}>
                        </div>
                        <div class="col-12">
                            <label for="visi" class="form-label">Visi</label>
                            <textarea class="form-control" id="visi" name="visi"> {{$data->visi}} </textarea>
                        </div>
                        <div class="col-12">
                            <label for="misi" class="form-label">Misi</label>
                            <textarea  class="form-control" id="misi" name="misi" > {{$data->misi}} </textarea>
                        </div>
                        <div class="col-12">
                            <label for="foto_struktur" class="form-label">Foto Struktur</label> <br>
                            <center><img src="{{ url(Storage::url ($data->foto_struktur))}}"  alt="" style="width:30%; height: auto;"></center><br><br>
                            <input type="file" class="form-control" id="foto_struktur" name="foto_struktur" value={{$data->foto_struktur}}>
                        </div>
                        <div class="col-12">
                            <label for="sambutan" class="form-label">Sambutan</label>
                            <textarea class="form-control" id="sambutan" name="sambutan" > {{$data->sambutan}} </textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Perbarui Data</button>
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        </div>
                    </form>


                    @else
                    <form class="row g-3" action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                    <div class="col-12">
                        <label for="nama_kadis" class="form-label">Nama Kadis</label>
                        <input type="text" class="form-control" id="nama_kadis" name="nama_kadis" >
                    </div>
                    <div class="col-12">
                        <label for="foto_kadis" class="form-label">Foto Kadis</label>
                        <input type="file" class="form-control" id="foto_kadis" name="foto_kadis" >
                    </div>
                    <div class="col-12">
                        <label for="visi" class="form-label">Visi</label>
                        <textarea class="form-control" id="visi" name="visi"> </textarea>
                    </div>
                    <div class="col-12">
                        <label for="misi" class="form-label">Misi</label>
                        <textarea  class="form-control" id="misi" name="misi" >  </textarea>
                    </div>
                    <div class="col-12">
                        <label for="foto_struktur" class="form-label">Foto Struktur</label> <br>
                        <input type="file" class="form-control" id="foto_struktur" name="foto_struktur">
                    </div>
                    <div class="col-12">
                        <label for="sambutan" class="form-label">Sambutan</label>
                        <textarea class="form-control" id="sambutan" name="sambutan" >  </textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
                    @endif

                       
                    </div>
                </div>
            </div>
        </div>
    </div>



    


    @push('js')
        <script>
            $('#myTable').DataTable();
        </script>
    @endpush
@endsection
