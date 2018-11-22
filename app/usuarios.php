<?php

namespace SIDTT;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class usuarios extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'Usuarios';
    public $timestamps = true;
    protected $fillable = 
    ['nombre', 'email', 'boleta', 'pass','tipo','cedula','numerodet','academia','telefono','celular','codigo'];

}
