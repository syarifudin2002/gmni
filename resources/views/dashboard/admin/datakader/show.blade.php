@extends('dashboard.admin.layouts.main')

@section('container')
    <div class="container">
         
        <div class="container text-center mt-3">
            <img src="{{ asset('storage/' . $kader->image) }}" class="bd-placeholder-img rounded" width="190" height="190"
                alt="Foto GMNI" style="object-fit: cover;">
            <h1 class="mb-3"> {{ $kader->nama }}</h1>
        </div>
        <div class="row mt-3">
            <!-- Kolom Kiri -->
            <div class="col-lg-6 col-md-12">
                <table class="table table-bordered bg-white">
                    <tr>
                        <th width="30%">Nama</th>
                        <td>{!! $kader->nama !!}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{!! $kader->alamat !!}</td>
                    </tr>
                    <tr>
                        <th>No WhatsApp</th>
                        <td>{!! $kader->no_whatsapp !!}</td>
                    </tr>
                    <tr>
                        <th>Kampus</th>
                        <td>{!! $kader->kampus !!}</td>
                    </tr>
                </table>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-lg-6 col-md-12">
                <table class="table table-bordered bg-white">
                    <tr>
                        <th width="40%">Jurusan</th>
                        <td>{!! $kader->jurusan !!}</td>
                    </tr>
                    <tr>
                        <th>Jenjang Kaderisasi</th>
                        <td>{!! $kader->jenjang_kaderisasi !!}</td>
                    </tr>
                    <tr>
                        <th>Tahun Kaderisasi</th>
                        <td>{!! $kader->tahun_kaderisasi !!}</td>
                    </tr>
                    <tr>
                        <th>Asal DPK</th>
                        <td>{!! $kader->asal_dpk !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


@endsection
