@extends('frontend.templates.default')

@section('content')
<div class="row">
  <div class="col s12 m12">
    <h2>Galeri Buku</h2>
    <blockquote>
      <p class="flow-text">Koleksi buku yang bisa kamu baca & pinjam</p>
    </blockquote>

    <form action="{{route('homepage')}}" method="GET " class="right">
      <div class="input-group">
        <input type="text" name="cari" class="form-control" placeholder="Cari Buku...">
          <button type="submit" id="search-btn" class="btn btn-flat">
          </button>
          </div>
    </form>
  </div>
</div>

<div class="row">
  @foreach ($books as $book)
  @include('frontend.templates.components.card-book', ['book' => $book])
  @endforeach
</div>
{{ $books->links('vendor.pagination.materialize') }}
@endsection