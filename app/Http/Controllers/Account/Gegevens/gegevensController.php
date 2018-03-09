<?php

namespace App\Http\Controllers\Account\Gegevens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class gegevensController extends Controller
{

    public function index($id)
    {

        $user = User::find($id)->first();

        return view('account.gegevens.gegevens')->with('user', $user);

    }

    public function update($id, Request $r)
    {

        $this->validate($r, [

            'name' => 'required|string|max:255',
            'last_name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'geslacht' => 'bool|required',
            'straat' => 'required|string',
            'woonplaats' => 'required|string',
            'postcode' => 'required|string',
            'land' => 'required|string'

        ]);

        $user = User::find($id)->first();

        $user->update([

            'name' => $r->name,
            'last_name' => $r->last_name,
            'email' => $r->email,
            'geslacht' => $r->geslacht,
            'straat' => $r->straat,
            'woonplaats' => $r->woonplaats,
            'postcode' => $r->postcode,
            'land' => $r->land

        ]);

        if($r->password !== "" )
        {

            $user->update([

                'password' => Hash::make($data['password']),

            ]);

        }

        return redirect()->back();

    }

}
