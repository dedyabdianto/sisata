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
                                data-bs-target="#modalTambahGaleri">
                                Tambah Galeri
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Judul</th>
                                        <th>foto</th>
                                        <th>video</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> {{ $item->judul }} </span></td>
                                            <td><span class="list-name">
                                                    @foreach (json_decode($item->foto) as $i)
                                                        <img src="{{ url(Storage::url($i)) }}" alt=""
                                                            style="width:100px; height: 100px; m-3">
                                                    @endforeach
                                                </span></td>
                                            <td><span class="list-name"> {!! $item->video !!} </span></td>
                                            <td> <button type="button" class="btn btn-info"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditGaleri-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusGaleri-{{ $item->id }}"><i
                                                        class="bi bi-trash"></i></button>
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
    <div class="modal fade" id="modalTambahGaleri" tabindex="-1" aria-labelledby="modalTambahGaleri" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('galeri.store') }}" method="post" enctype=multipart/form-data>
                        @csrf
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="col-12">
                            <label for="foto" class="form-label">Foto (dapat lebih dari 1 foto)</label>
                            <input type="file" class="form-control" id="foto" name="foto[]" required multiple>
                        </div>
                        <div class="col-12">
                            <label for="video" class="form-label">Link Embed Video Youtube</label>
                            <input type="text" class="form-control" id="video" name="video" required>
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
        <div class="modal fade" id="modalEditGaleri-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalEditGaleri" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('galeri.update', $item->id) }}" method="post"
                            enctype=multipart/form-data>
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $item->judul }}" required>
                            </div>
                            <div class="col-12">
                                <label for="foto" class="form-label">Foto (dapat lebih dari 1 foto)</label><br>
                                @foreach (json_decode($item->foto) as $i)
                                    <img src="{{ url(Storage::url($i)) }}" alt=""
                                        style="width:300px; height: 300px; mb-3">
                                @endforeach
                                <br>
                                <br>
                                <input type="file" class="form-control" id="foto" name="foto[]" multiple>
                            </div>
                            <div class="col-12">
                                <label for="video" class="form-label">Link Embed Video Youtube</label>
                                <input type="text" class="form-control" id="video" name="video"
                                    value="{{ $item->video }}" required>
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
        <div class="modal fade" id="modalHapusGaleri-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalHapusGaleri" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin ingin menghapus galeri "{{ $item->judul }}" ini?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('galeri.destroy', $item->id) }}" method="post">
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
