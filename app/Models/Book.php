<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','writer','description','image','category_id','status_id','price'];

    public const AVAILABLE=4;

    public function categories()
    {
        // return $this->hasMany(BookingItem::class);
        return $this->hasMany(BookCategory::class,'book_id','id');
    }

}
