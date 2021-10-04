<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $guarded =[];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        $storage = 'storage/';
        if (substr($this->cover,0,5) == "https") {
            return $this->cover;
        }

        if ($this->cover) {
            return asset($this->cover);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }

    // Relasi beberapa buku bisa di pinjem banyak  user (many to many) dg mmpasing tabel borrow_history untuk proses penyimpanan yg di proses di controller dg sintak (attach)
    public function borrowed()
    {
        return $this->belongsToMany(user::class, 'borrow_history')
                    ->withTimestamps();
        //->withTimestamps(); di tambahkan untuk mengisi data Create_at & Update_at di tbel borrow_history
    }

}
 