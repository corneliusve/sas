<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{

	protected $fillable = [ 'title', 'description', 'thumbnail', 'price', 'categorie_id', 'afmetingen', 'model', 'voorraad' ];


	public function categorie()
	{

		return $this->belongsTo('App\Categories');

	}

	public function subCategorie()
	{

		return $this->belongsTo('App\SubCategories');

	}


}
