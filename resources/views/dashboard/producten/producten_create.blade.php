@extends('layouts.dashboard')

@section('navigation')

	@include('dashboard.navigations.products_nav')

@stop


@section('content')

<form action="{{ route('producten.store') }}" enctype="multipart/form-data" method="POST">

	{{ csrf_field() }}



	<div class="field">
		<div class="columns">
			<div class="column is-9">
				<div class="control">
					<input type="text" name="title" class="input" placeholder="Titel" >
					@if ($errors->has('name'))

						<p>{{ $errors->first('name') }}</p>

					@endif
				</div>
			</div>
			<div class="column is-3">
				<div class="control">
					<input type="text" name="price" class="input" placeholder="Prijs">
					@if ($errors->has('price'))

						<p>{{ $errors->first('price') }}</p>

					@endif
				</div>
			</div>
		</div>
	</div>

	<div class="field">
		<div class="control m-t-30">
			<textarea name="description" id="" cols="30" rows="10" class="textarea" placeholder="Beschrijving"></textarea>
			@if ($errors->has('description'))

				<p>{{ $errors->first('description') }}</p>

			@endif
		</div>
	</div>

	<div class="field">
		<div class="control m-t-30">
			<input type="file" name="thumbnail" class="input" accept="image/*" placeholder="Kies afbeelding">
			@if ($errors->has('thumbnail'))

				<p>{{ $errors->first('thumbnail') }}</p>

			@endif
		</div>
	</div>

	<div class="field">
		<div class="control">
			<input type="text" name="afmetingen" class="input" placeholder="afmetingen">

			@if ($errors->has('afmetingen'))

				<p>{{ $errors->first('afmetingen') }}</p>

			@endif
		</div>
	</div>

	<div class="field is-grouped is-fullwidth">
		<div class="control is-expanded">
			<input type="text" name="model" class="input" placeholder="model">
			@if ($errors->has('model'))

				<p>{{ $errors->first('model') }}</p>

			@endif
		</div>
		<div class="control">
			<input type="text" name="voorraad" class="input" placeholder="voorraad">
			@if ($errors->has('voorraad'))

				<p>{{ $errors->first('voorraad') }}</p>

			@endif
		</div>
	</div>

	<div class="columns m-t-30">
		<div class="column">
			<div class="select">
				<select class="select" name="categorie">
					@foreach ($categories as $categorie)

						<option class="option" value="{{ $categorie->id }}">{{ $categorie->title }}</option>

					@endforeach
				</select>
				@if ($errors->has('categorie'))

					<p>{{ $errors->first('categorie') }}</p>

				@endif
			</div>
		</div>
		<div class="column">

		</div>
	</div>



	{{-- <div class="field">
		<div class="control">
			<div class="select m-t-30">
				<select>
					@foreach($categories as $categorie)
						<option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
					@endforeach

				</select>
			</div>
		</div>
	</div> --}}


	<button class="button second-button m-t-35" type="submit">Voeg toe</button>






</form>

@stop
