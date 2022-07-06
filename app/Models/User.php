<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * Os atributos que devem ser ocultados para serialização.
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     * Os atributos que devem ser lançados.
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsers(string|null $search = null)
    {
        $user = $this->where(function ($query) use ($search){
            if ($search)
           {
               $query->where('email', $search);
               $query->orWhere('name', 'LIKE', "%{$search}%");
           }
       })
       ->with(['Comments'])
       ->paginate(2);
       return $user;
    }
    //Relacionamentos
    public function Comments()
    {
        //como usamos nomes padrões os demais parametros são defaults
        return $this->hasMany(Comment::class);
        //caso contrario
        //return $this->hasMany(Comment::class,'user_id','id');


    }
}

