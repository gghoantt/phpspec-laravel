<?php

namespace App\PhpSpec\Models;

use Exception;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'author', 'publisher', 'year_publish', 'price', 'category_id'];

    /**
     * Make relationship to category.
     *
     * @return relationship
     */
    public function category()
    {
        return $this->belongsTo('App\PhpSpec\Model\Category', 'category_id'); // @codeCoverageIgnore
    }

    /**
    * Create the model in the database.
    *
    * @param $attributes
    * @return bool|int
    */
    public static function create(array $attributes = [])
    {
        return parent::create($attributes)->fresh();
    }
}
