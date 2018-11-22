<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class proyecto extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Usuarios';
    public $timestamps = true;
    protected $fillable = ['1','2','3','4','5','6','7','8','9','10','11','12','13']; 
    
}
