@extends('layouts.home_nav')

@section('content')
<div class="container">

    <div class="columns m-t-50">
        <div class="column is-3 p-t-90">
        <h2 class="is-size-5 m-b-25">Filters</h2>
            <form action="">
                <form action="">
                    <div class="field">
                        <label for="search" class="label">Zoeken</label>
                        <div class="control">
                            <input type="text" name="search" class="input" value="">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="categorie" class="label">Categorieën</label>
                            <div class="select is-fullwidth">
                                <select name="categorie" id="">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field m-t-25">
                        <div class="control">
                            <a class="m-t-30" href="{{ route('home') }}">Reset</a>
                        </div>
                    </div>


                    <div class="field m-t-20">
                        <div class="control">
                            <button type="submit" class="button second-button">Zoek</button>
                        </div>
                    </div>


                </form>
            </form>

        </div>
        <div class="column is-9">

            <h1 class="is-size-2 m-l-30 m-b-25">Resultaten</h1>

        <div class="columns m-l-15">


            @foreach ($products as $product)

                <div class="column product-item is-one-quarter-fullhd is-3-desktop is-4-tablet is-12-mobile is-variable">
                    <div class="wrapper">
                        <div class="thumbnail" style="background-image: url({{ Storage::url($product->thumbnail) }});">

                        </div>
                        <div class="product-content">
                            <h4 class="is-size-6 has-text-centered">{{ $product->title }}</h4>
                            <p class="m-t-10 has-text-centered">€ {{ $product->price }}</p>

                            <div class="has-items-centered m-t-15 is-small p-l-20 p-r-20">
                                <a class="button second-button is-fullwidth" href="{{ route('producten.show', ['id' => $product->id]) }}">Bekijk</a>
                            </div>


                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
