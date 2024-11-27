@extends('pages.admin.masters2')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Informasi</h5>
            <!--FORM EDIT Kategori-->
            <form class="row g-3" action="{{ route('informasi.update', $data->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
                </div>

                <div class="col-12">
                    <label for="kategori_informasi_id" class="form-label">Kategori Informasi</label>
                    <select class="form-control" name="kategori_informasi_id">
                        <option value="" selected>--pilih--</option>
                        @foreach ($list as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $data->kategori_informasi_id) selected @endif>{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
               
                <div class="col-12">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" style="height: 100px;">{{ $data->isi }}</textarea>
                </div>
                <div class="col-12">
                    <label for="gambar" class="form-label">Gambar</label><br>
                    <img src="{{ url(Storage::url($data->gambar)) }}" alt="" style="width:300px; height: 300px;"><br>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            <!--END FORM TAMBAH Kategori-->
        </div>
    </div>
   
</div @endsection
