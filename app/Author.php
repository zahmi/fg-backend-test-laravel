<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    protected $fillable = ['id', 'name'];

    // protected $dates = [];

    public static $rules = [
        "name" => "required"
    ];
    public $timestamps = false;
    protected $table = "author";
    
    // Relationships

}