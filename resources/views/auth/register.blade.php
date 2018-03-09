@extends('layouts.home_nav')

@section('content')



<div class="container form-container">
    <div class="form-wrapper m-t-50">
    <h1 class="is-size-2 m-b-30">Aanmelden</h1>
    <form action="{{ route('register') }}" method="POST">

        @csrf

        <div class="field">
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Voornaam">
            </div>

            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="text" name="last_name" class="input" placeholder="Achternaam">
            </div>

            @if ($errors->has('last_name'))
                <p>{{ $errors->first('last_name') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="email" name="email" class="input" placeholder="E-mail adres">
            </div>

            @if ($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="password" name="password" class="input" placeholder="Wachtwoord">
            </div>

            @if ($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="password" name="password_confirmation" class="input" placeholder="Herhaal wachtwoord">
            </div>

            @if ($errors->has('password_confirmation'))
                <p>{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>

        <div class="field m-b-20">
            <div class="control">
                <div class="select is-fullwidth">
                    <select class="" name="geslacht">
                        <option>Kies geslacht</option>
                        <option value="0">Man</option>
                        <option value="1">Vrouw</option>
                    </select>
                </div>
            </div>

            @if ($errors->has('geslacht'))
                <p>{{ $errors->first('password_confirmation') }}</p>
            @endif

        </div>

        <div class="field is-grouped">
            <div class="control is-expanded">
                <input type="text" name="straat" class="input" placeholder="Straatnaam + huisnummer">
                @if ($errors->has('straat'))
                    <p>{{ $errors->first('straat') }}</p>
                @endif
            </div>
            <div class="control is-expanded">
                <input type="text" name="woonplaats" class="input" placeholder="Woonplaats">
                @if ($errors->has('woonplaats'))
                    <p>{{ $errors->first('woonplaats') }}</p>
                @endif
            </div>
        </div>

        <div class="field is-grouped is-fullwidth">
            <div class="control is-expanded">
                <input type="text" name="postcode" class="input" placeholder="Postcode">
                @if ($errors->has('postcode'))
                    <p>{{ $errors->first('postcode') }}</p>
                @endif
            </div>
            <div class="control is-expanded">
                <div class="select is-fullwidth">
                    <select class="" name="land" id="">
                        <option>Kies je land</option>
                        <option value="nederland">Nederland</option>
                    </select>
                </div>

                @if ($errors->has('land'))
                    <p>{{ $errors->first('land') }}</p>
                @endif
            </div>
        </div>

        <div class="field m-t-20 m-b-20">
            <div class="control">
                <button class="button second-button ">Aanmelden</button>
            </div>
        </div>
    </form>

    <p>Heb je al een account? <a href="{{ route('login') }}">Log hier in</a></p>
    </div>
</div>
@endsection
