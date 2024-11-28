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
                                data-bs-target="#modalTambahWisata">
                                Tambah Wisata
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Kategori Wisata</th>
                                        <th>Nama Tempat Wisata</th>
                                        <th>Alamat</th>
                                        <th>Jam Operasional</th>
                                        <th>Status</th>
                                        <th>Nama Operator</th>
                                        <th>Rating</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> {{ $item->kategori_wisata->nama_kategori }} </span>
                                            </td>
                                            <td><span class="list-name"> {{ $item->nama_wisata }} </span></td>
                                            <td><span class="list-name"> {{ $item->alamat }} </span></td>
                                            <td><span class="list-name"> {{ $item->jam_mulai }} - {{ $item->jam_selesai }}
                                                </span></td>
                                            <td><span class="list-name"> {{ $item->status }} </span></td>
                                            <td><span class="list-name"> {{ $item->user->name }} </span></td>
                                            <td><span class="list-name"> {{ $item->rating }} </span></td>
                                            <td> <button type="button" class="btn btn-info"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditWisata-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusWisata-{{ $item->id }}"><i
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
    <div class="modal fade" id="modalTambahWisata" tabindex="-1" aria-labelledby="modalTambahWisata" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('wisata.store') }}" method="post" enctype=multipart/form-data>
                        @csrf
                        <div class="col-12">
                            <label for="nama_wisata" class="form-label">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" required>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Kategori Wisata</label>
                            <select class="form-control" name="kategori_wisata_id" required>
                                <option value="" selected>--pilih--</option>
                                @foreach ($list as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 200px;" required> </textarea>
                        </div>
                        <div class="row mt-3">
                            <label for="jam_mulai" class="form-label">Jam Operasional</label>
                            <div class="col-6">
                                <label for="jam_mulai" class="form-label">Mulai</label>
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
                            </div>
                            <div class="col-6">
                                <label for="jam_selesai" class="form-label">Selesai</label>
                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="harga" class="form-label">Harga Tiket Masuk</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="col-12">
                            <label for="link_maps" class="form-label">Link Maps</label>
                            <input type="text" class="form-control" id="link_maps" name="link_maps" required>
                        </div>
                        <div class="col-12">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto[]" required multiple>
                        </div>
                        <div class="col-12">
                            <label for="kategori_wisata_id" class="form-label">Nama Operator</label>
                            <select class="form-control" name="operator" required>
                                <option value="" selected>--pilih--</option>
                                @foreach ($operator as $item)
                                    <option value="{{ $item->id }}">{{ $item->username }}</option>
                                @endforeach
                            </select>
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
        <div class="modal fade" id="modalEditWisata-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalEditWisata" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Wisata</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('wisata.update', $item->id) }}" method="post"
                            enctype=multipart/form-data>
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="nama_wisata" class="form-label"><strong>Nama Tempat Wisata</strong></label>
                                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata"
                                    value="{{ $item->nama_wisata }}" required>
                            </div>
                            <div class="col-12">
                                <label for="kategori_wisata_id" class="form-label">Kategori Wisata</label>
                                <select class="form-control" name="kategori_wisata_id" required>
                                    <option value="" selected>--pilih--</option>
                                    @foreach ($list as $i)
                                        <option value="{{ $i->id }}"
                                            @if ($i->id == $item->kategori_wisata_id) selected @endif>{{ $i->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $item->alamat }}" required>
                            </div>
                            <div class="col-12">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 200px;" required> {{ $item->deskripsi }} </textarea>
                            </div>
                            <div class="row mt-3">
                                <label for="jam_mulai" class="form-label">Jam Operasional</label>
                                <div class="col-6">
                                    <label for="jam_mulai" class="form-label">Mulai</label>
                                    <input type="time" class="form-control" id="jam_mulai" name="jam_mulai"
                                        value="{{ $item->jam_mulai }}" required>
                                </div>
                                <div class="col-6">
                                    <label for="jam_selesai" class="form-label">Selesai</label>
                                    <input type="time" class="form-control" id="jam_selesai" name="jam_selesai"
                                        value="{{ $item->jam_selesai }}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="harga" class="form-label">Harga Tiket Masuk</label>
                                <input type="number" class="form-control" id="harga" name="harga"
                                    value="{{ $item->harga }}" required>
                            </div>
                            <div class="col-12">
                                <label for="link_maps" class="form-label">Link Maps</label>
                                <input type="text" class="form-control" id="link_maps" name="link_maps"
                                    value="{{ $item->link_maps }}" required>
                            </div>
                            <div class="col-12">
                                <label for="foto" class="form-label">Foto</label><br>
                                @foreach (json_decode($item->foto) as $i)
                                    <img src="{{ url(Storage::url($i)) }}" alt=""
                                        style="width:300px; height: 300px; mb-3">
                                @endforeach
                                <br>
                                <br>
                                <input type="file" class="form-control" id="foto" name="foto[]" multiple>
                            </div>
                            <div class="col-12">
                                <label for="kategori_wisata_id" class="form-label">Nama Operator</label>
                                <select class="form-control" name="operator" required>
                                    <option value="" selected>--pilih--</option>
                                    @foreach ($operator as $i)
                                        <option value="{{ $i->id }}"
                                            @if ($i->id == $item->user_id) selected @endif>{{ $i->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="status" class="form-label">Status Wisata</label>
                                <select class="form-control" name="status" required>
                                    <option value="" selected>--pilih--</option>
                                    <option value="aktif" @if ($item->status == 'aktif') selected @endif>Aktif</option>
                                    <option value="nonaktif" @if ($item->status == 'nonaktif') selected @endif>Nonaktif</option>
                                </select>
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
    @endforeach


    {{-- MODAL HAPUS --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalHapusWisata-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalHapusWisata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin ingin menghapus wisata "{{ $item->nama_wisata }}" ini?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('wisata.destroy', $item->id) }}" method="post">
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
