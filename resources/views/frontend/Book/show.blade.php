@extends('frontend.templates.default')

@section('content')
<h4>Detail Buku</h4>
<div class="col s12 m12">
    <div class="card horizontal hoverable">
        <!-- <div class="card-image"> -->
        <img src="{{ $book->getCover() }}" height="">
        <!-- </div> -->
        <div class="card-stacked">
            <div class="card-content">
                <h4 class="red-text accent-2">{{ $book->title }}</>
                </h4>
                <BLockquote>
                    <p>{{ $book->description }}</p>
                </BLockquote>
                <p>
                    <i class="material-icons">person</i>: {{ $book->Author->name }}
                </p>
                <p>
                    <i class="material-icons">book</i> : {{ $book->qty }}
                </p>
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow', $book)}}" method="POST">
                    @csrf
                    <input type="submit" class="btn red accent-1 right waves-effect waves-light" Value="Pinjam Buku"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<h4> Buku lainnya dari penulis {{ $book->author->name }} ...</h4>
<div class="row">
    <!-- Memilih data Author dari variabel books yg di pasing dari index
       dd($book->author);
       mengambil data buku yg di miliki author sbanyak 4 data
       dd($book->author->books) -->
    @foreach ($book->author->books->take(4) as $book)
        @include('frontend.templates.components.card-book', ['book' => $book])
    @endforeach
</div>
@endsection