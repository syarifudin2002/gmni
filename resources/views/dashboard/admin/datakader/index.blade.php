@extends('dashboard.admin.layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Silahkan Mengisi Data Kader Terbaru</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                    <a href="/dashboard/kader/create" class="btn btn-primary mb-3">Create New Kader</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kampus</th>
                                        <th scope="col">Asal DPK</th>
                                        <th scope="col">Jenjang Kaderisasi</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datakader as $kader)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kader->nama }}</td>
                                            <td>{{ $kader->kampus }}</td>
                                            <td>{{ $kader->asal_dpk }}</td>
                                            <td>{{ $kader->jenjang_kaderisasi }}</td>
                                            <td>
                                                <a href="{{ route('kader.show', $kader->id) }}" class="badge bg-info"><i
                                                        class="bi bi-eye"></i></a>
                                                <a href="{{ route('kader.edit', $kader->id) }}"
                                                    class="badge bg-warning"><i class="bi bi-pencil"></i></i></a>
                                                <form action="{{ route('kader.destroy', $kader->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="badge bg-danger border-0 btn-delete"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
