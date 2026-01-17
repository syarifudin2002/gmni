@extends('dashboard.admin.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $berita->title }}</h1>
                <a href="/dashboard/post" class="btn btn-success"><i class="bi bi-arrow-left"></i>Kembali</a>
                <a href="{{ route('post.edit', $berita->slug) }}" class="btn btn-warning"><i
                        class="bi bi-pencil"></i>Edit</a>
                <form action="{{ route('post.destroy', $berita->slug) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-delete"><i class="bi bi-trash"></i>Delete</button>
                </form>


                <p> <a href="/berita?category={{ $berita->Kategori->slug }} "
                        class="text-decoration-none">{{ $berita->Kategori->name }}</a></p>

                <!-- TAMPILKAN GAMBAR  -->
                @if ($berita->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->Kategori->name }}" class="img-fluid">
                </div>
                @endif
                {!! $berita->body !!}
            </div>
        </div>
    </div>
@endsection