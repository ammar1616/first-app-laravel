<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> o/main

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
<<<<<<< HEAD

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'cat_id');
    }
}
=======
}
>>>>>>> o/main
