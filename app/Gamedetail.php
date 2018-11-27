<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamedetail extends Model
{
    protected $table = 'gamedetails';
    protected $fillable = [ 'title', 'body'];
}
