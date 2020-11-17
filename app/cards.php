<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    protected $primaryKey = 'id';
    protected $fillable=['card','cvv', 'nip'];
    public $timestamps = false;
}
