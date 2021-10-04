<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
  public function index()
  {
     $jmluser = User::count();
     $jmlpenulis = Author::count();
     $jmlbuku = book::count();
     $jmlpinjman = BorrowHistory::count();
      return view ('admin.home', [
        'user' => $jmluser,
        'penulis' => $jmlpenulis,
        'buku' => $jmlbuku,
        'pinjam' => $jmlpinjman,
      ]); 
  }

  public function userShow()
  {
    return view ('admin.user.index');
  }
}
