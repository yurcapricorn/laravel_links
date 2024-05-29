<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public static function paginate($perPage = 10)
    {
        return DB::table('posts')->orderBy('id')->paginate($perPage);
    }
}
