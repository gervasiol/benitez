<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Roles extends Model
{
    
	public $table = "roles";
    

	public $fillable = [
	    "id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer"
    ];

	public static $rules = [
	    "id" => "required"
	];

}
