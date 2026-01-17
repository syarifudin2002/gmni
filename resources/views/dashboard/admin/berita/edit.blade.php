@extends('dashboard.admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">EDIT POSTINGAN GMNI</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="{{ route('post.update', $berita->slug) }}" class="mb-5">
            @csrf
             @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $berita->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required autofocus value="{{ old('slug', $berita->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategories as $kategori)
                    @if (old('slug', $berita->slug) == $kategori->id)
                    <option value="{{ $kategori->id }}" selected>{{ $kategori->name }}</option>
                    @else
                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @endif
                    @endforeach
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
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                {{ $message }}
                @enderror
                <input id="body" type="hidden" name="body" required autofocus value="{{ old('body', $berita->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update Postingan</button>
        </form>
    </div>




    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function () {
            fetch('/dashboard/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection