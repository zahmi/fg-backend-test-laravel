<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = ['id', 'author_id', 'title', 'url', 'content', 'created_at', 'updated_at'];

    //protected $dates = [];

    public static $rules = [
        "author_id"=> "required",
        "title"=> "required|max:255",
        "url"=> "required|unique:article,url",
        "content"=> "required"
    ];
    
    protected $table = "article";
    protected $hidden = ['author_id'];

    // Relationships
    /*
    * Defines one to many
    */
    public function authors()
    {
        return $this->hasMany('App\Author');
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

}
