<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctor
 * @package App\Models
 * @version September 30, 2021, 1:26 am UTC
 *
 * @property string $ape_nom
 * @property string $ndi
 * @property string $especialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'doctor';
    public $primaryKey= 'iddoctor';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'ndi',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'ape_nom' => 'string',
        'ndi' => 'string',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'ndi' => 'nullable|string|max:45',
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
