<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> o/main


class Book extends Model
{
<<<<<<< HEAD
    use HasFactory , SoftDeletes;
=======
    use HasFactory;

>>>>>>> o/main
    protected $fillable = [
        "title",
        "price",
        "description",
<<<<<<< HEAD
        "pic",
        "cat_id"
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function uploadFile($request, $neededFile)
    {
        $fileName = "book_" . time() . '_' . $neededFile->getClientOriginalName();
        $request->file('pic')->storeAs(
            'public/books',
            $fileName
        );
        return $fileName;
    }
}
=======
        "pic"
    ];
}
>>>>>>> o/main
