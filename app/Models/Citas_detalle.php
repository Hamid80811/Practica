<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Citas_detalle
 * @package App\Models
 * @version September 30, 2021, 1:26 am UTC
 *
 * @property integer $idcitas
 */
class Citas_detalle extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'citas_detalle';
    public $primaryKey= 'idcitas_detalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcitas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas_detalle' => 'integer',
        'idcitas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcitas' => 'nullable|integer'
    ];

    
}
