<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table='activity';
    protected $fillable = ['name','user_id', 'email', 'contact','price','location', 'image','category' ,'averageRating', 'description', 'weather'];
    protected $casts = [
        'starting_at' => 'datetime',
        'ending_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
