<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    public $table='estudiantes';

    public $timestamps=false;
    protected $fillable=[
        'id','nombre','direccion', 'telefono', 'correo','jornada','grado',
    ];

    protected $primaryKey='id';

}
