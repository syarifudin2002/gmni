@extends('Beranda.layouts.main')

@section('berita')
    <h1 class="mb-5 mt-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/berita">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search........." name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($beritas->count())
        <div class="card  mb-3">
            @if ($beritas[0]->image)
                <div style="width: 100%; height: auto; max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $beritas[0]->image) }}" alt="{{ $beritas[0]->Kategori->name }}"
                        class="img-fluid">
                </div>
            @endif
            <div class="card-body">
                <h3 class="card-title">{{ $beritas[0]->title }}</h3>

                <p>
                    <small>
                        <a href="/berita?category={{ $beritas[0]->Kategori->slug }} "
                            class="text-decoration-none">{{ $beritas[0]->Kategori->name }}</a>
                        {{ $beritas[0]->created_at->diffForHumans() }}
                    </small>
                </p>


                <p class="card-text">{{ $beritas[0]->excerpt }}</p>
                <a href="/berita/{{ $beritas[0]->slug }}" class="text-decoration-none btn btn-danger">
                    Baca Selengkapnya..</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($beritas->skip(1) as $info)
                    <div class="col-md-4  mb-4">
                        <div class="card h-100 d-flex flex-column">
                            <!-- TAMPILKAN GAMBAR  -->
                            @if ($info->image)
                                    <img src="{{ asset('storage/' . $info->image) }}" alt="{{ $info->Kategori->name }}"
                                        class="img-fluid" style="height:200px;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/berita/{{ $info->slug }}" class="text-decoration-none">
                                        {{ $info->title }}</a></h5>

                                <p>
                                    <small class="text-muted">
                                        <a href="/berita?category={{ $info->Kategori->slug }} "
                                            class="text-decoration-none">{{ $info->Kategori->name }}</a>
                                        {{ $info->created_at->diffForHumans() }}
                                    </small>
                                </p>

                                <p class="card-text">{{ $info['excerpt'] }}</p>
                                <a href="/berita/{{ $info->slug }}" class="text-decoration-none btn btn-danger">
                                    Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p>No Berita Found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $beritas->links() }}

    </div>

@endsection