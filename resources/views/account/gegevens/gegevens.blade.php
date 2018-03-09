@extends('layouts.account')

@section('content')

    <form action="{{ route('gegevens.update', ['id' => $user->id]) }}" method="POST">

        @csrf

        {{ method_field('PUT') }}

        <div class="field">
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Voornaam" value="{{ $user->name }}">
            </div>

            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="text" name="last_name" class="input" placeholder="Achternaam" value="{{ $user->last_name }}">
            </div>

            @if ($errors->has('last_name'))
                <p>{{ $errors->first('last_name') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input type="email" name="email" class="input" placeholder="E-mail adres" value="{{ $user->email }}">
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
                        @if($user->geslacht == 0)
                            <option value="0">Man</option>
                            <option value="1">Vrouw</option>
                        @else
                            <option value="1">Vrouw</option>
                            <option value="0">Man</option>
                        @endif

                    </select>
                </div>
            </div>

            @if ($errors->has('geslacht'))
                <p>{{ $errors->first('password_confirmation') }}</p>
            @endif

        </div>

        <div class="field is-grouped">
            <div class="control is-expanded">
                <input type="text" name="straat" class="input" placeholder="Straatnaam + huisnummer" value="{{ $user->straat }}">
                @if ($errors->has('straat'))
                    <p>{{ $errors->first('straat') }}</p>
                @endif
            </div>
            <div class="control is-expanded">
                <input type="text" name="woonplaats" class="input" placeholder="Woonplaats" value="{{ $user->woonplaats }}">
                @if ($errors->has('woonplaats'))
                    <p>{{ $errors->first('woonplaats') }}</p>
                @endif
            </div>
        </div>

        <div class="field is-grouped is-fullwidth">
            <div class="control is-expanded">
                <input type="text" name="postcode" class="input" placeholder="Postcode" value="{{ $user->postcode }}">
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
                <button class="button second-button">Bijwerken</button>
            </div>
        </div>
    </form>


@endsection
