<?php

namespace App\PhpSpec\Models;

use Exception;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'discription'];

    /**
     * Make relationship to book.
     *
     * @return relationship
     */
    public function book()
    {
        return $this->hasMany('App\PhpSpec\Model\Book'); // @codeCoverageIgnore
    }
}
