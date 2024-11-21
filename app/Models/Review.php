<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable =[
        'rating',
        'comment',
        'trip_id',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
