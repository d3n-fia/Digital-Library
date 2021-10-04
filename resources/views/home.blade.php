@extends('frontend.templates.default')

@section('content')
<div class="row">
<h3>Buku yang sedang dipinjam</h3>
<!-- mengambil data yg di passing dari controller -->
@foreach ($book as $book)
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
            </div>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection
