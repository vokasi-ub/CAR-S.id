<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['durasi'];
}