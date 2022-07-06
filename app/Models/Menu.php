<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'texto',
        'image',
        'posimagem',
    ];
    public function getMenus(string|null $search = null)
    {
        $menu = $this->where(function ($query) use ($search){
            if ($search)
           {
             $query->where('nome', $search);
             $query->orWhere('texto', 'LIKE', "%{$search}%");
           }
       })
       ->paginate(2);
       return $menu;
    }
}
