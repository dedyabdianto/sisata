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
                                data-bs-target="#modalTambahUser">
                                Tambah User
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Foto</th>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Role</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> <img src="{{ url(Storage::url($item->foto)) }}" alt="" style="width:50px; height: auto;" class="rounded-circle"> </span>
                                            </td>
                                            <td><span class="list-name"> {{ $item->name }} </span></td>
                                            <td><span class="list-name"> {{ $item->email }} </span></td>
                                            <td><span class="list-name"> {{ $item->tlp }}</span></td>
                                            <td><span class="list-name"> {{ $item->role }} </span></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalResetPassword-{{ $item->id }}"><i
                                                        class="bi bi-unlock-fill"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditUser-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusUser-{{ $item->id }}"><i
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
    <div class="modal fade" id="modalTambahUser" tabindex="-1" aria-labelledby="modalTambahUser" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('user.store') }}" method="post" enctype=multipart/form-data>
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="tlp" class="form-label">Telepom</label>
                            <input type="text" class="form-control" id="tlp" name="tlp">
                        </div>
                        <div class="col-12">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-control" name="role" required>
                                <option value="" selected>--Pilih Role--</option>
                                    <option value="pengguna">Pengguna</option>
                                    <option value="operator">Operator</option>
                                    <option value="kadis">Kadis</option>
                                    <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
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
        <div class="modal fade" id="modalEditUser-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalEditUser" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('user.update', $item->id) }}" method="post"
                            enctype=multipart/form-data>
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $item->email }}" required>
                            </div>
                            <div class="col-12">
                                <label for="tlp" class="form-label">Telepom</label>
                                <input type="text" class="form-control" id="tlp" name="tlp" value="{{ $item->tlp }}">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-12">
                                <label for="re_password" class="form-label">Konfirmasi Password</label>
                                <input type="text" class="form-control" id="re_password" name="re_password">
                            </div>
                            <div class="col-12">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-control" name="role" required>
                                    <option value="" selected>--Pilih Role--</option>
                                        <option value="pengguna" @if ($item->role == 'pengguna') selected @endif>Pengguna</option>
                                        <option value="operator" @if ($item->role == 'operator') selected @endif>Operator</option>
                                        <option value="kadis" @if ($item->role == 'kadis') selected @endif>Kadis</option>
                                        <option value="admin" @if ($item->role == 'admin') selected @endif>Admin</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="foto" class="form-label">Foto</label><br>
                                <img src="{{ Storage::url($item->foto) }}" alt="Foto User" width="100" style="mb-4"><br>
                                <input type="file" class="form-control" id="foto" name="foto">
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
        <div class="modal fade" id="modalHapusUser-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalHapusUser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin ingin menghapus user "{{ $item->name }}" ini?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('user.destroy', $item->id) }}" method="post">
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

    {{-- MODAL RESET PASSWORD --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalResetPassword-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalResetPassword" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin ingin <strong>me-reset password user "{{ $item->name }}" </strong> ini?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--FORM TAMBAH Kategori-->
                        <form class="row g-3" action="{{ route('user.reset', $item->id) }}" method="post">
                            @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger">Reset Password</button>
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
