<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categories;
use App\SubCategories;

class categorieController extends Controller
{

	public function index()
	{


		return view('dashboard.categories.categories')->with('categories', Categories::all());

	}

	public function create()
	{

		return view('dashboard.categories.categories_create');

	}

	public function store(Request $r)
	{

		$this->validate($r,[

			'title' => 'required|string'

		]);

		Categories::create([

			'title' => $r->title,
			'slug' => str_slug($r->title)

		]);

		return redirect()->route('categories');

	}

	public function show($slug)
	{

		$categorie = Categories::where('slug', $slug)->first();

        $subcats = SubCategories::where('categorie_id', $categorie->id)->get();

		return view('dashboard.categories.categories_show')->with('categorie', $categorie)->with('subcats', $subcats);

	}

	public function edit($slug)
	{

		$categorie = Categories::where('slug', $slug)->first();

		return view('dashboard.categories.categories_edit')->with('categorie', $categorie);

	}

	public function update(Request $r, $slug)
	{

		$categorie = Categories::where('slug', $slug )->first();

		$this->validate($r, [

			'title' => 'string',

		]);

		$categorie->title = $r->title;
		$categorie->save();

		return redirect()->route('categories');

	}


	public function delete($slug)
	{
		$categorie = Categories::where('slug', $slug)->first()->pluck('id');
		Categories::destroy($categorie);

		return redirect()->back();

	}



}
