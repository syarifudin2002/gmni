@extends('dashboard.admin.layouts.main')

@section('container')
    <div class="container">

        <div class="container text-center mt-3">
            <img src="{{ asset('storage/' . $kader->image) }}" class="bd-placeholder-img rounded" width="190" height="190"
                alt="Foto GMNI" style="object-fit: cover;">
            <h1 class="mb-3"> {{ $kader->nama }}</h1>
        </div>
        {{-- <div class="row mt-3"> --}}
            {{-- <!-- Kolom Kiri -->
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
            </div> --}}

            <table class="table table-bordered bg-white kader-table">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $kader->nama }}</td>
                        <th class="d-none d-lg-table-cell">Jurusan</th>
                        <td class="d-none d-lg-table-cell">{{ $kader->jurusan }}</td>
                    </tr>

                    <tr>
                        <th>Alamat</th>
                        <td>{{ $kader->alamat }}</td>
                        <th class="d-none d-lg-table-cell">Jenjang Kaderisasi</th>
                        <td class="d-none d-lg-table-cell">{{ $kader->jenjang_kaderisasi }}</td>
                    </tr>

                    <tr>
                        <th>No WhatsApp</th>
                        <td>{{ $kader->no_whatsapp }}</td>
                        <th class="d-none d-lg-table-cell">Tahun Kaderisasi</th>
                        <td class="d-none d-lg-table-cell">{{ $kader->tahun_kaderisasi }}</td>
                    </tr>

                    <tr>
                        <th>Kampus</th>
                        <td>{{ $kader->kampus }}</td>
                        <th class="d-none d-lg-table-cell">Asal DPK</th>
                        <td class="d-none d-lg-table-cell">{{ $kader->asal_dpk }}</td>
                    </tr>

                    <!-- BARIS KHUSUS HP -->
                    <tr class="d-lg-none">
                        <th>Jurusan</th>
                        <td colspan="3">{{ $kader->jurusan }}</td>
                    </tr>
                    <tr class="d-lg-none">
                        <th>Jenjang Kaderisasi</th>
                        <td colspan="3">{{ $kader->jenjang_kaderisasi }}</td>
                    </tr>
                    <tr class="d-lg-none">
                        <th>Tahun Kaderisasi</th>
                        <td colspan="3">{{ $kader->tahun_kaderisasi }}</td>
                    </tr>
                    <tr class="d-lg-none">
                        <th>Asal DPK</th>
                        <td colspan="3">{{ $kader->asal_dpk }}</td>
                    </tr>
                </tbody>
            </table>

        {{-- </div> --}}
    </div>
@endsection
