<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected  $table = 'todos';

    protected $casts = ['complete' => 'boolean'];

    protected $fillable = [
        'name',
        'user_id',
        'complete',
        'created_at',
        'updated_at'
    ];


}
