<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users'; // Define the table name if different from the model name

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];
}
