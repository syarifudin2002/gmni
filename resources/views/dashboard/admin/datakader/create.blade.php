@extends('dashboard.admin.layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TAMBAH DATA KADER GMNI</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form method="post" action="/dashboard/kader" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" required autofocus value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_whatsapp" class="form-label">No Whatsaap</label>
                        <input type="text" class="form-control @error('no_whatsapp') is-invalid @enderror"
                            id="no_whatsapp" name="no_whatsapp" required autofocus value="{{ old('no_whatsapp') }}">
                        @error('no_whatsapp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" required autofocus value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kampus" class="form-label">Nama Kampus</label>

                        <select id="disabledSelect" class="form-select w-100" name="kampus">
                            <option>Universitas Mataram</option>
                            <option>Universitas Pendidikan Mandalika</option>
                            <option>Universitas Bumigora</option>
                            <option>Universitas Islam Negeri Mataram</option>
                            <option>Institut Agama Hindu Negeri</option>
                        </select>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" required autofocus value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenjang_kaderisasi" class="form-label">Jenjang Kaderisasi</label>
                    <select id="disabledSelect" class="form-select w-100" name="jenjang_kaderisasi">
                        <option>PPAB</option>
                        <option>KTD</option>
                        <option>KTM</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="asal_dpk" class="form-label">Asal DPK</label>
                    <select id="disabledSelect" class="form-select w-100" name="asal_dpk">
                        <option>Komisariat Bung Karno</option>
                        <option>Komisariat Universitas Mataram</option>
                        <option>Komisariat FSTT</option>
                        <option>Komisariat Trisakti</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun_kaderisasi" class="form-label">Tahun Kaderisasi</label>

                    <select id="disabledSelect" class="form-select w-100" name="tahun_kaderisasi">
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Gambar</label>
                    <input class="form-control" type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- pertanyaan ini nanti --}}
                <button type="submit" class="btn btn-primary">Create</button>

            </div>
            </form>
        </div>
        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/dashboard/post/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>
    </div>
@endsection
