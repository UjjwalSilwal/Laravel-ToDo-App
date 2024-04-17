<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    use HasFactory;

    // this model has made connection to migrations
    protected $table= 'todos';
    protected $primary_key='id';
}
