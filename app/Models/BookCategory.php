<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
    ];

    public function book()
    {
        return $this->belongToMany(Book::class);
    }

    public function category()
    {
        return $this->belongToMany(Category::class);
    }
}
