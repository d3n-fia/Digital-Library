<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use App\BorrowHistory;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request) 
    {
       if($request->has('cari')){
           $books = book::where('title','LIKE','%'.$request->cari.'%')->paginate(5);
       }else{
         $books = book::paginate(10);
    }
    return view ('Frontend.Book.index', [
        'books' => $books,
        'tittle' => 'Books Gallery',
    ]);
    }

    //Membuat variabel untuk menmpung data yg di pasing dari Route (book.show)
    public function show (Book $book)
    {
        return view ('frontend.book.show', [
            'book' => $book,
            'tittle' => 'Books Detail',
        ]);
    }


    public function borrow(Book $book)
    {
        // Cara Manual
        // Mengambil data id buku yg di passing dari index buku
        // dd($book-id)
        // mengambil id user dari User yg sedang Login
        // dd(Auth()->id());
        // BorrowHistory::create([
        //     'user_id' => Auth()->id(),
        //     'book_id' => $book->id,
        // ]);
        // return 'ok';
        // menampung data user
        $user = Auth()->user();
        // memproteksi user tidak bisa meminjam 2x dg buku yg sama
        //jika->user->pinjam->book id nya lebih dari 0 maka akan dikerjakan yg dibwah ini 
        if ($user->borrow()->where('book_id', $book->id)->count() > 0){
            return redirect()->back()->with('toast','kamu sudah meminjam buku dengan judul ini');
        }
        // menyimpan data buku yg dipinjam ke borrow_history
        // user->meminjam->Buku( user_id dan book_-id nya otomatis tersimpan)
        $user -> borrow()->attach($book);
        //mengurangi jumlah qty buku ketika sudah dipinjam
        $book->decrement('qty');

        return redirect()->back()->with('toast','Buku berhasil dipinjam');
    }

}
