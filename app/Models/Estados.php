<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Estados extends Model
{
    
	public $table = "estados";
    

	public $fillable = [
	    "id",
		"descripcion",
		"dias_validez",
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
		"descripcion" => "string",
		"created_at_ip" => "string",
		"updated_at_ip" => "string"
    ];

	public static $rules = [
	    
	];

}
