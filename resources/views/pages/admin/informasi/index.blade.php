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
                                data-bs-target="#modalTambahInformasi">
                                Tambah Kategori
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Judul</th>
                                        <th>Kategori Informasi</th>
                                        <th>Jumlah Dibaca</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> {{ $item->judul }} </span></td>
                                            <td><span class="list-name"> {{ $item->kategori_informasi->nama_kategori }}
                                                </span></td>
                                            <td><span class="list-name"> {{ $item->jml_dibaca }} </span></td>
                                            <td> <button type="button" class="btn btn-info"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditInformasi-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusInformasi-{{ $item->id }}"><i
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
    <div class="modal fade" id="modalTambahInformasi" tabindex="-1" aria-labelledby="modalTambahInformasi"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('informasi.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="col-12">
                            <label for="kategori_informasi_id" class="form-label">Kategori Informasi</label>
                            <select class="form-control" name="kategori_informasi_id">
                                <option value="" selected>--pilih--</option>
                                @foreach ($list as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="isi" class="form-label">Isi</label>
                            <textarea class="form-control" id="isi" name="isi" style="height: 100px;"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar</label>
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
        </div>
    </div>

    {{-- MODAL EDIT --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalEditInformasi-{{ $item->id }}" tabindex="-1"
            aria-labelledby="modalEditInformasi" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Informasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('informasi.update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $item->judul }}">
                            </div>
                            <div class="col-12">
                                <label for="kategori_informasi_id" class="form-label">Kategori Informasi</label>
                                <select class="form-control" name="kategori_informasi_id">
                                    <option value="" selected>--pilih--</option>
                                    @foreach ($list as $i)
                                        <option value="{{ $i->id }}"
                                            @if ($i->id == $item->kategori_informasi_id) selected @endif>{{ $i->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="isi" class="form-label">Isi</label>
                                <textarea class="form-control" id="isi" name="isi" style="height: 100px;">{{ $item->isi }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="gambar" class="form-label">Gambar</label><br>
                                <img src="{{ url(Storage::url($item->gambar)) }}" alt="" style="width:300px; height: 300px;"><br><br>
                                <input type="file" class="form-control" id="gambar" name="gambar">
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
        <div class="modal fade" id="modalHapusInformasi-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalHapusKategori" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin ingin menghapus "{{ $item->judul }}" ini?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('informasi.destroy', $item->id) }}" method="post">
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
