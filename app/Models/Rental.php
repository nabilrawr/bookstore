<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'start_date', 'end_date', 'status_id', 'book_id', 'staff_id', 'receipt'];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id', 'id');
    }
}
