<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{   
    //Menginfokan bahwa di Model/db Author tdk ada Timestamp
    //untuk menghindari error ketika meng fake/seeder
    public $timestamps = false;
    
    //untuk menginput/create data ke db sehinnga jika ada field baru tidak usah isi filable lagi
    protected $guarded = [];
    
    //relasi 1 Author memiliki banyak buku
    public function books()
    {
        return $this->hasMany(book::class);
    }
}
