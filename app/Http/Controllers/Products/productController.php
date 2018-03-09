<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categories;
use App\products;

class productController extends Controller
{


    public function index()
	{



		return view('dashboard.producten.producten')->with('producten', products::all());

	}

	public function create()
	{

		return view('dashboard.producten.producten_create')->with('categories', Categories::all());

	}

    public function store(Request $r)
    {

        $this->validate($r, [

            'title' => 'required|string',
            'price' => 'required|string',
            'description' => 'required',
            'thumbnail' => 'required',
            'categorie' => 'required',
            'afmetingen' => 'required|string',
            'model' => 'required|string',
            'voorraad' => 'required|string'

        ]);

        products::create([

            'title' => $r->title,
            'price' => $r->price,
            'description' => $r->description,
            'thumbnail' => $r->thumbnail->store('public/products'),
            'categorie_id' => $r->categorie,
            'afmetingen' => $r->afmetingen,
            'model' => $r->model,
            'voorraad' => $r->voorraad

        ]);



        return redirect()->route('producten');

    }

    public function show($id)
    {

        $product = products::find($id)->first();

        return view('dashboard.producten.producten_show')->with('product', $product);

    }

    public function edit($id)
    {

        $product = products::find($id)->first();



        return view('dashboard.producten.producten_edit')->with('product', $product)->with('categories', Categories::all());

    }

    public function update($id, Request $r)
    {

        $this->validate($r, [

            'title' => 'required|string',
            'price' => 'required|string',
            'description' => 'required',
            'categorie' => 'required'

        ]);


        $product = products::find($id)->first();


        $product->update([

            'title' => $r->title,
            'price' => $r->price,
            'description' => $r->description,
            'categorie_id' => $r->categorie

        ]);

        if($r->hasFile('thumbnail')) {

            $product->update([

                'thumbnail' => $r->thumbnail->store('public/products'),

            ]);

        }

        return redirect()->route('producten');

    }

    public function destroy($id)
    {

        products::destroy($id);

        return redirect()->back();


    }


}
