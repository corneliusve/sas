<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\products;
use App\Categories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {

        $search = $r->search;

        $filters = [

            'search' => $r->search,
            'categorie' => $r->categorie,

        ];


        if(!empty($filters['search']))
        {

            $products = DB::table('products')->where('title', 'LIKE', '%'.$filters['search'].'%')->paginate(20);

        } else {

            $products = products::paginate(20);

        }

        if(!empty($filters['categorie']))
        {

            $products = DB::table('products')->where('categorie_id', $filters['categorie'] )->paginate(20);

        } else {

            $products = products::paginate(20);

        }



        return view('home')->with('products', $products)->with('categories', Categories::all());
    }


    public function search(Request $r)
    {

        $search = $r->search;

        $products = DB::table('products')->where('title', 'LIKE', '%'.$search.'%')->paginate(20);

        return view('home')->with('products', $products);

    }

    public function test()
    {

        dd('test');

    }
}
