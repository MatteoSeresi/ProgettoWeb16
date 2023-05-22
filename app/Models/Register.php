<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nome',
        'Cognome',
        'Email',
        'Utente',
        'Password',
        'Tipo',
        'Genere',
        'Telefono',
        'Data_Nascita',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Username',
        'Password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    
    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->Tipo, $role);
    }

}
