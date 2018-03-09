@extends('layouts.home_nav')

@section('content')
    <div class="container form-container">
        <div class="form-wrapper m-t-50">
        <h1 class="is-size-2 m-b-30">Aanmelden</h1>
        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="field">
                <div class="control">
                    <input type="email" name="email" class="input" placeholder="Voornaam">
                </div>

                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="control">
                    <input type="password" name="password" class="input" placeholder="Voornaam">
                </div>

                @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
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
