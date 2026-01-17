@extends('Beranda.layouts.main')

@section('berit')
  <article class="mt-5">
    <h2>{{ $beritas->title }}</h2>
    <!-- <h5>{{ $beritas->excerpt }}</h5> -->
    <p> <a href="/berita?category={{ $beritas->Kategori->slug }} "
        class="text-decoration-none">{{ $beritas->Kategori->name }}</a></p>

    <!-- TAMPILKAN GAMBAR  -->
    @if ($beritas->image)
      <div style="max-height: 700px; overflow: hidden;">
        <img src="{{ asset('storage/' . $beritas->image) }}" alt="{{ $beritas->Kategori->name }}" class="img-fluid">
      </div>
    @endif

    <!-- <p>{{ $beritas->body }}</p> -->
    {!! $beritas->body !!}

  </article>
  <a href="/berita" class="text-decoration-none btn btn-primary my-4">Kembali</a>

@endsection