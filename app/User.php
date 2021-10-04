<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relasi beberapa user bisa meminjam bebrapa buku (many to many) dg medeklasrasikan borrow_history untuk mendukung proses penyimpanan di controller dg sintak (attach)
    public function borrow()
    {
        return $this -> BelongsToMany(book::class, 'borrow_history')
                    ->withTimestamps();
        //->withTimestamps(); di tambahkan untuk mengisi data Create_at & Update_at di tbel borrow_history
    }


}
