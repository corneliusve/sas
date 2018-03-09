@extends('layouts.dashboard')

@section('navigation')

	@include('dashboard.navigations.categories_nav')

@endsection

@section('content')

		<h2 class="is-size-3 alternate-heading m-b-25">Categorieën</h2>

   		@foreach($categories as $categorie)

			<div class="label-categorie">
				<p class="subcat-title">{{ $categorie->title }}</p>
				<div class="icons">
					<span class="icon is-small m-r-40">
						<a href="{{ route('categories.show', ['slug' => $categorie->slug]) }}"><img src="{{ asset('images/icons/add-white.svg') }}" alt=""></a>
					</span>
					<span class="icon is-small m-r-40">
						<a href="{{ route('categories.edit', ['slug' => $categorie->slug]) }}"><img src="{{ asset('images/icons/edit-white.svg') }}" alt=""></a>
					</span>
					<span class="icon is-small">
						<form action="{{ route('categories.delete', ['slug' => $categorie->slug]) }}" method="post">
		            {{ csrf_field() }}
		            {{ method_field('DELETE') }}
		                <button class="icon-button"><img src="{{ asset('images/icons/trash-white.svg') }}" alt=""></button>
		            </form>
					</span>
				</div>
			</div>

			{{-- <tr>
				<td>{{ $categorie->title }}</td>
            <td><a href="{{ route('categories.show', ['slug' => $categorie->slug]) }}"><img src="{{ asset('images/icons/add.svg') }}" alt=""></a></td>
				<td><a href="{{ route('categories.edit', ['slug' => $categorie->slug]) }}"><img src="{{ asset('images/icons/edit.svg') }}" alt=""></a></td>
				<td><form action="{{ route('categories.delete', ['slug' => $categorie->slug]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
                <button class="trash-button" style="background-image: url({{ asset('images/icons/trash.svg') }});"></button>
            </form></td>


			</tr> --}}

   		@endforeach

		<form action="{{ route('categories.store') }}" class="add-categorie" method="POST">
		   {{ csrf_field() }}

		  	<div class="columns">
		  		<div class="column is-9">

					<div class="field float-left">
					   <div class="control">
						  <input type="text" name="title" class="input">
					   </div>
					</div>

		  		</div>
		  		<div class="column right is-3">

					<div class="field m-l-30 float-right">
					   <div class="control">
						  <button class="button second-button is-small m-t-10" type="submit">Voeg toe</button>
					   </div>
					</div>

		  		</div>
		  	</div>




		</form>


@endsection
