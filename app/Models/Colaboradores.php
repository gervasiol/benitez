<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Colaboradores extends Model
{
    
	public $table = "colaboradores";
    

	public $fillable = [
	    "id",
		"nombre",
		"apellido",
		"cuil",
		"cel_cod_area",
		"cel",
		"domicilio",
		"created_at",
		"updated_at",
		"created_at_ip",
		"updated_at_ip",
		"fecha_ingreso",
		"fecha_egreso",
		"estado_civil",
		"hijos"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"nombre" => "string",
		"apellido" => "string",
		"cuil" => "string",
		"cel_cod_area" => "integer",
		"cel" => "integer",
		"domicilio" => "string",
		"created_at_ip" => "string",
		"updated_at_ip" => "string",
		"estado_civil" => "boolean"
    ];

	public static $rules = [
	    
	];

}
