<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','start_date','end_date','status_id','book_id','staff_id','receipt'];

    public function book()
    {
        return $this->belongsTo(Book::class,'book_id','id');
    }

}

