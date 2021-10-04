<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table = 'borrow_history';

    protected $guarded = [];

    
    //merelasikan dg tabel user
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    //merelasikan dg tabel book
    public function book()
    {
        return $this->belongsTo(book::class);
    }

    //merelasikan dengan tabel user(admin)-> 'admin_id' jadi FK untuk 'id' di tbl user
    public function admin()
    {
        return $this->belongsTo(User::class, 'id', 'admin_id');
    }

}
