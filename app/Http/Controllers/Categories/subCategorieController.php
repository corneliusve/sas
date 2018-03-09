<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categories;
use App\SubCategories;



class subCategorieController extends Controller
{


	public function store(Request $r, $slug)
	{

		$this->validate($r, [

			'title' => 'required|string'

		]);

		$headCategorie = Categories::where('slug', $slug)->first();

		SubCategories::create([

			'title' => $r->title,
			'slug' => str_slug($r->title),
			'categorie_id' => $headCategorie->id

		]);

		return redirect()->route('categories.show', ['slug' => $slug]);

	}


}
