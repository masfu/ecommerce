<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'user_id',
			'category_id',
			'title',
			'description',
			'price',
			'quantity'
	];
	
	
	/**
	* relationship Product between user
	* @return App\Models\User;
	**/
	public function user(){
		$this->belongsTo('App\Models\User');
	}
	
	/**
	* relationship Product between Category
	* @return App\Models\Category;
	**/
	public function category(){
		$this->belongsTo('App\Models\Category');
	}
}
