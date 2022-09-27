<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Userprofile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'surname', 
        'email', 
        'address',
        'birthdate',
        'profilepicture'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
