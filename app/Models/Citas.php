<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas
 * @package App\Models
 * @version September 30, 2021, 1:25 am UTC
 *
 * @property integer $idpaciente
 * @property string $fecha_cita
 * @property string $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    use HasFactory;
    

    public $table = 'citas';
    public $primaryKey= 'idcitas';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas' => 'integer',
        'idpaciente' => 'integer',
        'fecha_cita' => 'date',
        'id_doctor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha_cita' => 'nullable',
        'id_doctor' => 'nullable|string|max:45'
    ];

    
}
