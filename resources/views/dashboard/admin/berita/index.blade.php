@extends('dashboard.admin.layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Silahkan Mengisi Berita Terbaru</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                    <a href="/dashboard/post/create" class="btn btn-primary mb-3">Create New Post</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($beritas as $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $berita->title }}</td>
                                            <td>{{ $berita->kategori->name }}</td>
                                            <td>
                                                <a href="{{ route('post.show', $berita->slug) }}" class="badge bg-info"><i
                                                        class="bi bi-eye"></i></a>
                                                <a href="{{ route('post.edit', $berita->slug) }}"
                                                    class="badge bg-warning"><i class="bi bi-pencil"></i></i></a>
                                                <form action="{{ route('post.destroy', $berita->slug) }}" method="post"
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
