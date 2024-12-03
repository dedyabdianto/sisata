@extends('pages.admin.masters2')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="dashboard-box table-opp-color-box">

                        {{-- <h4>{{ $title }}</h4> --}}
                        @if ($data)
                            <form class="row g-3" action="{{ route('profil.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label for="nama_kadis" class="form-label">Nama Kadis</label>
                                    <input type="text" class="form-control" id="nama_kadis" name="nama_kadis"
                                        value="{{ $data->nama_kadis }}">
                                </div>

                                <div class="col-12">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="nip" name="nip"
                                        value="{{ $data->nip }}">
                                </div>

                                
                                <div class="col-12">
                                    <label for="pangkat_golongan_id" class="form-label">Pangkat Golongan</label>
                                    <select class="form-control" name="pangkat_golongan_id" required>
                                        <option value="" selected>--pilih--</option>
                                        @foreach ($pagol as $pangkat)
                                            <option value="{{ $pangkat->id }}"
                                                @if ($pangkat->id == $data->pangkat_golongan_id) selected @endif>{{ $pangkat->pangkat_golongan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="foto_kadis" class="form-label">Foto Kadis</label> <br>
                                    <center><img src="{{ url(Storage::url($data->foto_kadis)) }}" alt=""
                                            style="width:30%; height: auto;"></center><br><br>
                                    <input type="file" class="form-control" id="foto_kadis" name="foto_kadis"
                                        value={{ $data->foto_kadis }}>
                                </div>
                                <div class="col-12">
                                    <label for="visi" class="form-label">Visi</label>
                                    <textarea class="form-control" id="visi" name="visi"> {{ $data->visi }} </textarea>
                                </div>
                                <div class="col-12" id="dynamic-fields-edit-{{ $data->id }}">
                                    @foreach (json_decode($data->misi) as $index => $misi)
                                        <div class="col-12" id="field{{ $data->id }}-{{ $index + 1 }}">
                                            <label for="misi{{ $data->id }}-{{ $index + 1 }}">Misi
                                                {{ $index + 1 }}</label>
                                            <input type="text" class="form-control"
                                                id="misi{{ $data->id }}-{{ $index + 1 }}" name="misi[]"
                                                value="{{ $misi }}">
                                            <button type="button" class="btn btn-danger mt-2 mb-4 remove-field"
                                                data-data-id="{{ $data->id }}" data-field-id="{{ $index + 1 }}"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-warning" id="add-field-{{ $data->id }}"><i
                                            class="bi bi-plus"></i> tambah misi</button>
                                </div>
                                <div class="col-12">
                                    <label for="foto_struktur" class="form-label">Foto Struktur</label> <br>
                                    <center><img src="{{ url(Storage::url($data->foto_struktur)) }}" alt=""
                                            style="width:30%; height: auto;"></center><br><br>
                                    <input type="file" class="form-control" id="foto_struktur" name="foto_struktur"
                                        value={{ $data->foto_struktur }}>
                                </div>
                                <div class="col-12">
                                    <label for="sambutan" class="form-label">Sambutan</label>
                                    <textarea class="form-control" id="sambutan" name="sambutan"> {{ $data->sambutan }} </textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Perbarui Data</button>
                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                </div>
                            </form>
                        @else
                            <form class="row g-3" action="{{ route('profil.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="nama_kadis" class="form-label">Nama Kadis</label>
                                    <input type="text" class="form-control" id="nama_kadis" name="nama_kadis">
                                </div>
                                <div class="col-12">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="nip" name="nip">
                                </div>
                                <div class="col-12">
                                    <label for="pangkat_golongan_id" class="form-label">Pangkat Golongan</label>
                                    <select class="form-control" name="pangkat_golongan_id" required>
                                        <option value="" selected>--pilih--</option>
                                        @foreach($pagol as $item)
                                        <option value="{{$item->id}}">{{$item->pangkat_golongan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="foto_kadis" class="form-label">Foto Kadis</label>
                                    <input type="file" class="form-control" id="foto_kadis" name="foto_kadis">
                                </div>
                                <div class="col-12">
                                    <label for="visi" class="form-label">Visi</label>
                                    <textarea class="form-control" id="visi" name="visi"> </textarea>
                                </div>
                                <div id="dynamic-fields">
                                    <div class="col-12">
                                        <label for="misi" class="form-label">Misi</label>
                                        <input type="text" class="form-control" id="misi" name="misi[]">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-warning" id="add-field"><i
                                            class="bi bi-plus"></i></button>
                                </div>
                                <div class="col-12">
                                    <label for="foto_struktur" class="form-label">Foto Struktur</label> <br>
                                    <input type="file" class="form-control" id="foto_struktur" name="foto_struktur">
                                </div>
                                <div class="col-12">
                                    <label for="sambutan" class="form-label">Sambutan</label>
                                    <textarea class="form-control" id="sambutan" name="sambutan">  </textarea>
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

        {{-- SCRIPT TAMBAH MISI --}}
        <script>
            $(document).ready(function() {
                let fieldIndex = 1;

                // Event handler for adding a new field
                $('#add-field').click(function() {
                    fieldIndex++;
                    const newField = `
                        <div class="col-12" id="field${fieldIndex}">
                            <label for="misi${fieldIndex}">Misi ${fieldIndex}</label>
                            <input type="text" class="form-control" id="misi${fieldIndex}" name="misi[]">
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

        {{-- END TAMBAH MISI --}}


        {{-- SCRIPT EDIT MISI --}}
        <script>
            $(document).ready(function() {
                // Ambil ID atau gunakan nilai default
                const dataId = {{ $data->id ?? 'null' }};
                const isIdValid = dataId !== 'null';
        
                // Hanya jalankan logika jika ID valid
                if (isIdValid) {
                    let fieldIndex = {{ count(json_decode($data->misi ?? '[]')) }};
                    
                    $('#add-field-' + dataId).click(function() {
                        fieldIndex++;
                        const newField = `
                            <div class="col-12" id="field${dataId}-${fieldIndex}">
                                <label for="misi${dataId}-${fieldIndex}">Misi ${fieldIndex}</label>
                                <input type="text" class="form-control" id="misi${dataId}-${fieldIndex}" name="misi[]">
                                <button type="button" class="btn btn-danger mt-2 mb-4 remove-field" data-data-id="${dataId}" data-field-id="${fieldIndex}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        `;
                        $('#dynamic-fields-edit-' + dataId).append(newField);
                    });
        
                    $('#dynamic-fields-edit-' + dataId).on('click', '.remove-field', function() {
                        const fieldId = $(this).data('field-id');
                        const currentDataId = $(this).data('data-id');
                        $(`#field${currentDataId}-${fieldId}`).remove();
                    });
                } else {
                    console.warn('ID tidak valid, fungsionalitas dinamis tidak diaktifkan.');
                }
            });
        </script>
        
        {{-- END EDIT MISI --}}
    @endpush
@endsection
