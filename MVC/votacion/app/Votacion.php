<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votacion extends Model
{
    protected $fillable = [
        'mesa','eleccion','p1','p2','p3','p4','estado'];
    protected $table = 'votacion';

}
