<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Loan;


class Books extends Model
{
    //
    public function author(){
        return $this->belongsTo(Author::class); //un libro pertenece a un autor
    }

    public function loans(){
        return $this->hasMany(Loan::class); //tiene muchos loans
    }

    public function categorias(){
        return $this->BelongsToMany(Category::class); //pertenece a muchas categorias
    }
}
