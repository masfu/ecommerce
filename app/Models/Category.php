<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * relationship categories between product
     * @return App\Models\Product;
     * */
    public function products() {
        return $this->hasMany('App\Models\Product');
    }

}
