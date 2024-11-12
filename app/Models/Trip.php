<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table='activity';
    protected $fillable = ['name', 'email', 'contact','price','location', 'image', 'description'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
