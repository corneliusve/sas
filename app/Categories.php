<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    
	protected $fillable = [ 'title', 'slug' ];

	public function products()
	{

		return $this->hasMany('App\products');

	}

	public function subCategorie()
	{

		return $this->hasMany('App\SubCategories');

	}

	

}
