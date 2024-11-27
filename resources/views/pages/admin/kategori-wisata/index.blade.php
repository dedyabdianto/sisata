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
                                data-bs-target="#modalTambahKategori">
                                Tambah Kategori
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> {{ $item->nama_kategori }} </span></td>
                                            <td> <button type="button" class="btn btn-info"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditKategori-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalHapusKategori-{{ $item->id }}"><i
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
    <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-labelledby="modalTambahKategori"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('kategori-wisata.store') }}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
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
        <div class="modal fade" id="modalEditKategori-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalEditKategori" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('kategori-wisata.update', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                    value="{{ $item->nama_kategori }}" required>
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

    @foreach ($data as $item)
    <div class="modal fade" id="modalHapusKategori-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="modalHapusKategori" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yakin ingin menghapus kategori "{{$item->nama_kategori}}" ini?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('kategori-wisata.destroy', $item->id) }}" method="post">    
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
