<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //pentru a putea fi modificat datele din coloana de baza de date
    protected $fillable = [
        'name', 'email', 'password','activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //ascunde datele din coloana in return pe json
    protected $hidden = [
        'bio','id','password', 'remember_token',
    ];

    //proprietati intr-o variabila, adaugare date suplimentare
    protected $appends = [
        'humanCreatedAt',
    ];
    // get(numeAppends)Atribute() !! name convention
    public function getHumanCreatedAtAttribute(){
        return $this->created_at->diffForHumans();
    }


    public function getFullName(){
        return $this->first_name. ' ' .$this->last_name;
    }

    public function scopeActive($query){
        return $query->where('activated', true);
    }

    public function scopeNotActive($query){
        return $query->where('activated', false);
    }
}
