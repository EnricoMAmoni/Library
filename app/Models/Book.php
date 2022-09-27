<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'category',
        'year',
        'price',
        'synopsis',
        'img'
    ];

    protected $table = "books";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
