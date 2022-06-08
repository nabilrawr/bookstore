<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'writer', 'description', 'image', 'category_id', 'status_id', 'price'];

    public const AVAILABLE = 4;

    public function categories()
    {
        // return $this->hasMany(BookCategory::class, 'book_id', 'id');
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
