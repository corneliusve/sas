@extends('layouts.home_nav')


@section('content')
<div class="container m-t-50">

    <div class="columns columns-show">

        <div class="column is-6">
            <div class="img-wrapper">
                <img src="{{ Storage::url($product->thumbnail) }}" alt="">
            </div>
        </div>
        <div class="column is-6">

            <h1 class="is-size-2">{{ $product->title }}</h1>

            <p class="m-t-50"><span>prijs:</span> € {{ $product->price }}</p>
            <p><span>Afmetingen:</span> {{ $product->afmetingen }}</p>

            <p class="m-t-20"><span>Model:</span> {{ $product->model }}</p>
            <p><span>Voorraad:</span> {{ $product->voorraad }}</p>

            <form class="m-t-50" action="">
                <div class="field">
                    <div class="control">
                        <button class="button second-button">Winkelmandje</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</div>
@endsection
