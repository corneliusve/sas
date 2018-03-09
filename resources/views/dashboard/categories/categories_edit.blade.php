@extends('layouts.dashboard')

@section('navigation')
	
   @include('dashboard.navigations.categories_nav')

@endsection

@section('content')

   <form action="{{ route('categories.update', ['slug' => $categorie->slug]) }}" method="POST">
   		
   		{{ csrf_field() }}

         {{ method_field('PUT') }}

   		<div class="field">
   			<div class="control">
   				<input type="text" value="{{ $categorie->slug }}" name="title" class="input" placeholder="Kies een titel">
   			</div>
   		</div>

   		<div class="field m-t-25">
   			<div class="control">
   				<button class="button second-button">Wijziging opslaan</button>
   			</div>
   		</div>
		

   </form>

@endsection

