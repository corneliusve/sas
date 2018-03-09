<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    
	protected $fillable = ['title', 'slug', 'categorie_id'];


	public function headCategorie()
	{

		return $this->belongsTo('App\Categories');

	}

	public function products()
	{

		return $this->hasMany('App\products');

	}


}
