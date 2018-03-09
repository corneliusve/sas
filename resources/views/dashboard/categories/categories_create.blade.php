@extends('layouts.dashboard')

@section('navigation')

	@include('dashboard.navigations.categories_nav')

@endsection

@section('content')

   <form action="{{ route('categories.store') }}" method="POST">
   		
   		@csrf

   		<div class="field">
   			<div class="control">
   				<input type="text" name="title" class="input" placeholder="Kies een titel">
   			</div>
   		</div>

   		<div class="field m-t-25">
   			<div class="control">
   				<button class="button second-button">Voeg categorie toe</button>
   			</div>
   		</div>
		

   </form>

@endsection

