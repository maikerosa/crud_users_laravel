<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json_Users extends Model
{
    use HasFactory;

    protected $table = 'users_list';

    protected $fillable = [
        'name',
        'email',
        'username',
    ];
}
