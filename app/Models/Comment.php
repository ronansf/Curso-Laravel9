<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'visible'
    ];

    protected $casts = [
        'visible' => 'boolean'
    ];
    //Relacionamentos
    public function user()
    {
        //como usamos nomes padrões os demais parametros são defaults
        return $this->belongsTo(User::class);
    }
}
