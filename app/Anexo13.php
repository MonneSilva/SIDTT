<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Anexo13 extends Eloquent
{
	protected $connection = 'mongodb';
    protected $collection = 'Anexo13';
    public $timestamps = true;
    //El número del registro corresponde al atributo del diagrama de la base de datos de los anexos
    protected $filleable = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14'];
}