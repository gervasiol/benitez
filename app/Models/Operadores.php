<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Operadores extends Model
{
    
	public $table = "operadores";
    

	public $fillable = [
	    "id",
		"nombre",
		"apellido",
		"cuil",
		"cel_cod_area",
		"cel",
		"responsable",
		"domicilio",
		"referencia_domicilio",
		"tipo_operador_id",
		"created_at",
		"updated_at",
		"created_at_ip",
		"updated_at_ip"
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
		"responsable" => "string",
		"domicilio" => "string",
		"referencia_domicilio" => "string",
		"tipo_operador_id" => "integer",
		"created_at_ip" => "string",
		"updated_at_ip" => "string"
    ];

	public static $rules = [
	    
	];

}
