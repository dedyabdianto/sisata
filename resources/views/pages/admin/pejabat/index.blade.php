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
                                data-bs-target="#modalTambahPejabat">
                                Tambah Data Pejabat
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>foto</th>
                                        <th>Nama Pejabat</th>
                                        <th>Jabatan</th>
                                        <th>Pangkat/Gol/Ruang</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Riwayat Jabatan</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><span class="list-name"> <img src="{{ url(Storage::url($item->foto)) }}"
                                                        alt="" style="width:50%; height: auto;"> </span></td>
                                            <td><span class="list-name"> {{ $item->nama_pejabat }}</span></td>
                                            <td><span class="list-name"> {{ $item->jabatan->nama_jabatan }} </span></td>
                                            <td><span class="list-name"> {{ $item->pangkat_golongan->pangkat_golongan }}
                                                </span></td>
                                            <td><span class="list-name"> {{ $item->pendidikan_terakhir }} </span></td>
                                            <td><span class="list-name">
                                                    <ul>
                                                        @foreach (json_decode($item->riwayat_jabatan) as $i)
                                                            <li> {{ $i }} </li>
                                                        @endforeach
                                                    </ul>
                                                </span></td>
                                            <td> <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#detailPejabat-{{ $item->id }}"><i
                                                        class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditPejabat-{{ $item->id }}"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusPejabat-{{ $item->id }}"><i
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
    <div class="modal fade" id="modalTambahPejabat" tabindex="-1" aria-labelledby="modalTambahPejabat" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pejabat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH Kategori-->
                    <form class="row g-3" action="{{ route('pejabat.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="nama_pejabat" class="form-label">Nama Pejabat</label>
                            <input type="text" class="form-control" id="nama_pejabat" name="nama_pejabat">
                        </div>
                        <div class="col-12">
                            <label for="jabatan_id" class="form-label">Jabatan</label>
                            <select class="form-control" name="jabatan_id">
                                <option value="" selected>--pilih--</option>
                                @foreach ($jabatan as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jabatan_id" class="form-label">Jabatan</label>
                            <select class="form-control" name="pangkat_golongan_id">
                                <option value="" selected>--pilih--</option>
                                @foreach ($pagol as $i)
                                    <option value="{{ $i->id }}">{{ $i->pangkat_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                        </div>
                        <div id="dynamic-fields">
                            <div class="col-12">
                                <label for="riwayat_jabatan" class="form-label">Riwayat Jabatan</label>
                                <input type="text" class="form-control" id="riwayat_jabatan" name="riwayat_jabatan[]">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-warning" id="add-field"><i
                                    class="bi bi-plus"></i></button>
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
    @foreach ($data as $pejabat)
    <div class="modal fade" id="modalEditPejabat-{{ $pejabat->id }}" tabindex="-1" aria-labelledby="modalEditPejabat" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pejabat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- FORM EDIT Pejabat -->
                    <form class="row g-3" action="{{ route('pejabat.update', $pejabat->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="nama_pejabat" class="form-label">Nama Pejabat</label>
                            <input type="text" class="form-control" id="nama_pejabat" name="nama_pejabat" value="{{ $pejabat->nama_pejabat }}">
                        </div>
                        <div class="col-12">
                            <label for="jabatan_id" class="form-label">Jabatan</label>
                            <select class="form-control" name="jabatan_id">
                                <option value="" selected>--pilih--</option>
                                @foreach ($jabatan as $i)
                                    <option value="{{ $i->id }}" {{ $pejabat->jabatan_id == $i->id ? 'selected' : '' }}>{{ $i->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="pangkat_golongan_id" class="form-label">Pangkat Golongan</label>
                            <select class="form-control" name="pangkat_golongan_id">
                                <option value="" selected>--pilih--</option>
                                @foreach ($pagol as $i)
                                    <option value="{{ $i->id }}" {{ $pejabat->pangkat_golongan_id == $i->id ? 'selected' : '' }}>{{ $i->pangkat_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ $pejabat->pendidikan_terakhir }}">
                        </div>
                        <div id="dynamic-fields-edit-{{ $pejabat->id }}">
                            @foreach (json_decode($pejabat->riwayat_jabatan) as $index => $riwayat)
                                <div class="col-12" id="field{{ $pejabat->id }}-{{ $index + 1 }}">
                                    <label for="riwayat_jabatan{{ $pejabat->id }}-{{ $index + 1 }}">Riwayat Jabatan {{ $index + 1 }}</label>
                                    <input type="text" class="form-control" id="riwayat_jabatan{{ $pejabat->id }}-{{ $index + 1 }}" name="riwayat_jabatan[]" value="{{ $riwayat }}">
                                    <button type="button" class="btn btn-danger mt-2 remove-field" data-pejabat-id="{{ $pejabat->id }}" data-field-id="{{ $index + 1 }}"><i class="bi bi-trash"></i></button>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-warning" id="add-field-{{ $pejabat->id }}"><i class="bi bi-plus"></i> tambah riwayat</button>
                        </div>
                        <div class="col-12">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            @if ($pejabat->foto)
                                <img src="{{ Storage::url($pejabat->foto) }}" alt="Foto Pejabat" width="100">
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                    <!-- END FORM EDIT Pejabat -->
                </div>
            </div>
        </div>
    </div>
@endforeach


{{-- MODAL HAPUS --}}

@foreach ($data as $item)
    <div class="modal fade" id="modalHapusPejabat-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="modalHapusPejabat" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yakin ingin menghapus pejabat "{{$item->nama_pejabat}}" ini?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH pagol-->
                    <form class="row g-3" action="{{ route('pejabat.destroy', $item->id) }}" method="post">    
                        @csrf
                        @method ('DELETE')                   
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                    <!--END FORM TAMBAH pagol-->
                </div>
            </div>
        </div>
    </div>
@endforeach




    @push('js')
        <script>
            $('#myTable').DataTable();
        </script>


        {{-- SCRIPT TAMBAH RIWAYAT --}}
        <script>
            $(document).ready(function() {
                let fieldIndex = 1;

                // Event handler for adding a new field
                $('#add-field').click(function() {
                    fieldIndex++;
                    const newField = `
            <div class="col-12" id="field${fieldIndex}">
                <label for="riwayat_jabatan${fieldIndex}">Riwayat Jabatan ${fieldIndex}</label>
                <input type="text" class="form-control" id="riwayat_jabatan${fieldIndex}" name="riwayat_jabatan[]">
                <button type="button" class="btn btn-danger mt-2 remove-field" data-field-id="${fieldIndex}"><i class="bi bi-trash"></i></button>
            </div>
        `;
                    $('#dynamic-fields').append(newField);
                });

                // Event delegation for dynamically added remove buttons
                $('#dynamic-fields').on('click', '.remove-field', function() {
                    const fieldId = $(this).data('field-id');
                    $(`#field${fieldId}`).remove();
                });
            });
        </script>

        {{-- SCRIPT EDIT RIWAYAT --}}

        <script>
            $(document).ready(function() {
                // Iterate over each modal to set up event handlers
                @foreach ($data as $pejabat)
                    let fieldIndex{{ $pejabat->id }} = {{ count(json_decode($pejabat->riwayat_jabatan)) }};

                    $('#add-field-{{ $pejabat->id }}').click(function() {
                        fieldIndex{{ $pejabat->id }}++;
                        const newField = `
                <div class="col-12" id="field{{ $pejabat->id }}-${fieldIndex{{ $pejabat->id }}}">
                    <label for="riwayat_jabatan{{ $pejabat->id }}-${fieldIndex{{ $pejabat->id }}}">Riwayat Jabatan ${fieldIndex{{ $pejabat->id }}}</label>
                    <input type="text" class="form-control" id="riwayat_jabatan{{ $pejabat->id }}-${fieldIndex{{ $pejabat->id }}}" name="riwayat_jabatan[]">
                    <button type="button" class="btn btn-danger mt-2 remove-field" data-pejabat-id="{{ $pejabat->id }}" data-field-id="${fieldIndex{{ $pejabat->id }}}"><i class="bi bi-trash"></i></button>
                </div>
            `;
                        $('#dynamic-fields-edit-{{ $pejabat->id }}').append(newField);
                    });

                    $('#dynamic-fields-edit-{{ $pejabat->id }}').on('click', '.remove-field', function() {
                        const fieldId = $(this).data('field-id');
                        const pejabatId = $(this).data('pejabat-id');
                        $(`#field${pejabatId}-${fieldId}`).remove();
                    });
                @endforeach
            });
        </script>
    @endpush
@endsection
