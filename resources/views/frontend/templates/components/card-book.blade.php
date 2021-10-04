<div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $book->getCover() }}" height="210px">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h5>
                        <!-- Buat link ke route dg membawa variabel $book -> supya nanti bisa di tampilkan sesuai buku yg di klik -->
                        <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a>
                    </h5>
                    <p>{{ Str::limit($book->description, 100) }}</p>
                </div>
                <div class="card-action">
                    <form action="{{ route('book.borrow', $book)}}" method="POST">
                        @csrf
                        <input type="submit" class="btn green accent-1 right waves-effect waves-light" Value="Pinjam Buku"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>