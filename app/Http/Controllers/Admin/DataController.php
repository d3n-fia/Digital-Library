<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\book;
use App\BorrowHistory;
use App\User;

class DataController extends Controller
{
    public function authors()
        {
            $authors = Author::orderBy('name', 'ASC');

            return datatables()->of($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
        }


        public function books()
        {
            //menambhkn with('author')->diambil dari function di model book->untuk meminimalisasi Query builder(speed to accses db)
            $books = book::with('author')->orderBy('title', 'ASC');

            //Selain cara diatas bisa juga dengan  memakai ->get() diakhirnya
            #books->load('author);

            return datatables()->of($books)
                ->addColumn('author', function(book $model) {
                    return $model->author->name;
                })
                ->editColumn('cover', function(book $model) {
                    return '<img src="'. $model->getCover() .'" height="150px">';
                })
                ->addColumn('action', 'admin.book.action')
                ->addIndexColumn()
                ->rawColumns(['cover','action'])
                ->toJson();
        }



        public function borrows()   
        {
            // where('returned_at', null)->untuk menampilkan buku yg belum dikembalikan
            $borrows = BorrowHistory::where('returned_at', null)->latest()->get();
            $borrows->load('user','book');
            // mengambil data nama user dari yg sudah di relasiakan di borrow history
            // addColumn('user'-> variabel nama user untuk di pasing ke hal index
            return datatables()->of($borrows)
            ->addColumn('user', function(BorrowHistory $model) {
                return $model->user->name;
            })
                
            // mengambil data nama user dari yg sudah di relasiakan di borrow history
            // addColumn('book_title'-> variabel judul buku untuk di pasing ke hal index
            ->addColumn('book_title', function(BorrowHistory $model) {
                return $model->book->title;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
        }

        public function users()
        {
            $users = User::orderBy('name', 'ASC');

            return datatables()->of($users)
            // ->addColumn('action', 'admin.user.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();

        }
} 