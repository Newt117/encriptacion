<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "cards";
    protected $fillable = ['id','card', 'cvv', 'nip'];
    public $timestamps = false;
}
