<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //mengambil relasi tabel user dg  buku 
        //borrow = function yg ada di model user yg mennjukan relasi ke buku yg dipinjam
        $book = auth()->user()->borrow;
        //dd($book);
        return view('home', [
            'book' => $book,
            'tittle' => 'My Books',
        ]);
    }
}
