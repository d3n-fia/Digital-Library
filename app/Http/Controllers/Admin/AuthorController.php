<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan halaman index Author
        //tambahan admin+nama route krna di setiap route secara default sudah di rubh ditmbhkan 'admin'
        //->prefix('admin') di RouteServiceProvider
        // dg passsing tittle
        //Tidak perlu passing data karena hnya mnampilkan saja
        return view('admin.author.index')
        ->with('tittle', 'Data Penulis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //manampilkan halaman Author create dg passsing tittle
       return view('admin.author.create')
       ->with('tittle', 'Tambah Penulis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi name jika ada pemberian nama kurang dari 3 digit
        // dan wajib diisi tdk boleh kosong
        $this->validate($request, [
            'name' => 'required|min:3',
        ]);
        //input data Author nmaa saja dg passing success
        Author::create($request->only('name'));
        return redirect()->route('admin.author.index')
        ->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    //Mendeklarasikan Author yg di
    {
        //dd($author);
        //Menampilkan Hal Edit dg passing data Author dan tittle
        return view('admin.author.edit', [
            'author'=>$author,
            'tittle'=>'Edit Penulis',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
        ]);

        $author->update($request->only('name'));
        return redirect()->route('admin.author.index')
        ->with('info', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete(); 
        return redirect()->route('admin.author.index')->with('danger', 'Data berhasil dihapus');
    }
}
