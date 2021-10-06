<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Usuario
 * @package App\Models
 * @version September 30, 2021, 1:24 am UTC
 *
 * @property string $ape_nombre
 * @property string $usuario
 * @property string $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'usuario';
    public $primaryKey= 'idusuario';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nombre',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'ape_nombre' => 'string',
        'usuario' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nombre' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|string|max:45'
    ];

    
}
