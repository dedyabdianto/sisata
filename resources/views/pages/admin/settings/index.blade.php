@extends('pages.admin.masters2')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="dashboard-box table-opp-color-box">

                        {{-- <h4>{{ $title }}</h4> --}}
                        @if (isset($data))
                            <form class="row g-3" action="{{ route('settings.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-6">
                                    <label for="nama_web" class="form-label">Nama Website</label>
                                    <input type="text" class="form-control" id="nama_web" name="nama_web"
                                        value="{{ $data->nama_web }}">
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $data->email }}">
                                </div>
                                <div class="col-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ $data->alamat }}">
                                </div>
                                <div class="col-6">
                                    <label for="tlp" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="tlp" name="tlp"
                                        value="{{ $data->tlp }}">
                                </div>
                                <div class="col-12">
                                    <label for="tagline" class="form-label">Tagline Website</label>
                                    <input type="text" class="form-control" id="tagline" name="tagline"
                                        value="{{ $data->tagline }}">
                                </div>
                                <div class="col-6">
                                    <label for="about" class="form-label">Tentang</label>
                                    <textarea type="text" class="form-control" id="about" name="about" style="height: 200px;"> {{ $data->about }}</textarea>
                                </div>
                                <div class="col-6">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" style="height: 200px;"> {{ $data->deskripsi }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="logo" class="form-label">Logo</label> <br>
                                    <center><img src="{{ url(Storage::url($data->logo)) }}" alt=""
                                            style="width:30%; height: auto;"></center><br><br>
                                    <input type="file" class="form-control" id="logo" name="logo"
                                        value={{ $data->logo }}>
                                </div>
                                <div class="col-6">
                                    <label for="link_fb" class="form-label">Link Facebook</label>
                                    <input type="text" class="form-control" id="link_fb" name="link_fb"
                                        value="{{ $data->link_fb }}">
                                </div>
                                <div class="col-6">
                                    <label for="link_twt" class="form-label">Link Twitter</label>
                                    <input type="text" class="form-control" id="link_twt" name="link_twt"
                                        value="{{ $data->link_twt }}">
                                </div>
                                <div class="col-6">
                                    <label for="link_ig" class="form-label">Link Instagram</label>
                                    <input type="text" class="form-control" id="link_ig" name="link_ig"
                                        value="{{ $data->link_ig }}">
                                </div>
                                <div class="col-6">
                                    <label for="link_yt" class="form-label">Link Youtube</label>
                                    <input type="text" class="form-control" id="link_yt" name="link_yt"
                                        value="{{ $data->link_yt }}">
                                </div>

                                <div class="col-6">
                                    <label for="link_wa" class="form-label">Link WhatsApp</label>
                                    <input type="text" class="form-control" id="link_wa" name="link_wa"
                                        value="{{ $data->link_wa }}">
                                </div>
                                <div class="col-6">
                                    <label for="link_linkedin" class="form-label">Link Linkedin</label>
                                    <input type="text" class="form-control" id="link_linkedin" name="link_linkedin"
                                        value="{{ $data->link_linkedin }}">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Perbarui Data</button>
                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                </div>
                            </form>
                        @else
                            <form class="row g-3" action="{{ route('settings.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-6">
                                    <label for="nama_web" class="form-label">Nama Website</label>
                                    <input type="text" class="form-control" id="nama_web" name="nama_web" required>
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="col-6">
                                    <label for="tlp" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="tlp" name="tlp">
                                </div>
                                <div class="col-12">
                                    <label for="tagline" class="form-label">Tagline Website</label>
                                    <input type="text" class="form-control" id="tagline" name="tagline">
                                </div>
                                <div class="col-6">
                                    <label for="about" class="form-label">Tentang</label>
                                    <textarea type="text" class="form-control" id="about" name="about" style="height: 200px;"> </textarea>
                                </div>
                                <div class="col-6">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" style="height: 200px;"> </textarea>
                                </div>
                                <div class="col-12">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </div>
                                <div class="col-6">
                                    <label for="link_fb" class="form-label">Link Facebook</label>
                                    <input type="text" class="form-control" id="link_fb" name="link_fb">
                                </div>
                                <div class="col-6">
                                    <label for="link_twt" class="form-label">Link Twitter</label>
                                    <input type="text" class="form-control" id="link_twt" name="link_twt">
                                </div>
                                <div class="col-6">
                                    <label for="link_ig" class="form-label">Link Instagram</label>
                                    <input type="text" class="form-control" id="link_ig" name="link_ig">
                                </div>
                                <div class="col-6">
                                    <label for="link_yt" class="form-label">Link Youtube</label>
                                    <input type="text" class="form-control" id="link_yt" name="link_yt">
                                </div>

                                <div class="col-6">
                                    <label for="link_wa" class="form-label">Link WhatsApp</label>
                                    <input type="text" class="form-control" id="link_wa" name="link_wa">
                                </div>
                                <div class="col-6">
                                    <label for="link_linkedin" class="form-label">Link Linkedin</label>
                                    <input type="text" class="form-control" id="link_linkedin" name="link_linkedin">
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
@endsection
