@extends('pages.admin.masters2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="dashboard-box table-opp-color-box">
                    {{-- <h4>{{ $title }}</h4> --}}

                    <div class="publish-action">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalFile">
                            Tambah File
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table datatable" id="myTable">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th>Judul</th>
                                    <th>Kategori File</th>
                                    <th>File</th>
                                    <th>Tahun</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><span class="list-name"> <a href="#" data-bs-toggle="modal" data-bs-target="#detailFile-{{ $item->id }}"> {{ $item->judul }}</a> </span></td>
                                    <td><span class="list-name"> {{ $item->kategori_file->nama_kategori }}
                                        </span></td>
                                        <td>
                                        <a href="{{url(Storage::url($item->file))}}" target="_blank"><button class="btn btn-success" type="button">PDF FILE DOWNLOAD</button></a>
                                            
                                        </td>
                                        <td><span class="list-name"> {{$item->tahun}} </span></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditFile-{{ $item->id }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusFile-{{ $item->id }}"><i
                                                class="bi bi-exclamation-octagon"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- MODAL CREATE --}}
<div class="modal fade" id="modalFile" tabindex="-1" aria-labelledby="modalFile"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--FORM TAMBAH Kategori-->
                <form class="row g-3" action="{{ route('file.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="col-12">
                        <label for="kategori_file_id" class="form-label">Kategori File</label>
                        <select class="form-control" name="kategori_file_id">
                            <option value="" selected>--pilih--</option>
                            @foreach ($list as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <div class="col-12">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
                <!--END FORM TAMBAH Kategori-->
            </div>
        </div>
    </div>
</div>

{{-- MODAL EDIT --}}
@foreach ($data as $item)
<div class="modal fade" id="modalEditFile-{{ $item->id }}" tabindex="-1"
    aria-labelledby="modalEditFile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--FORM TAMBAH Kategori-->
                <form class="row g-3" action="{{ route('file.update', $item->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            value="{{ $item->judul }}">
                    </div>
                    <div class="col-12">
                        <label for="kategori_file_id" class="form-label">Kategori File</label>
                        <select class="form-control" name="kategori_file_id">
                            <option value="" selected>--pilih--</option>
                            @foreach ($list as $i)
                            <option value="{{ $i->id }}"
                                @if ($i->id == $item->kategori_file_id) selected @endif>{{ $i->nama_kategori }}
                            </option>
                            @endforeach
                            
                        </select>
                        
                    </div>

                    <div class="col-12">
                    
                        <label for="file" class="form-label">File</label>
                        <iframe src="{{ url(Storage::url($item->file)) }}" width="100%" height="500"></iframe>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <div class="col-12">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun"
                            value="{{ $item->tahun }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update Data</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
                <!--END FORM TAMBAH Kategori-->
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- MODAL HAPUS --}}
@foreach ($data as $item)
<div class="modal fade" id="modalHapusFile-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="modalHapusKategori" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yakin ingin menghapus "{{ $item->judul }}" ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--FORM TAMBAH Kategori-->
                <form class="row g-3" action="{{ route('file.destroy', $item->id) }}" method="post">
                    @csrf
                    @method ('DELETE')
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
                <!--END FORM TAMBAH Kategori-->
            </div>
        </div>
    </div>
</div>
@endforeach




@push('js')
<script>
    $('#myTable').DataTable();
</script>
@endpush
@endsection