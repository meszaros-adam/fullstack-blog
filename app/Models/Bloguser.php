<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloguser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
}
