@extends('layouts.dashboard')

@section('navigation')

	@include('dashboard.navigations.products_nav')

@endsection




@section('content')

<h1 class="is-size-2">Al je producten</h1>

<div class="columns is-multiline m-t-50">
@foreach ($producten as $product)
	<div class="column product-item is-one-quarter-fullhd is-one-thirds-desktop is-half-tablet is-12-mobile is-variable">
		<div class="wrapper">
			<div class="thumbnail" style="background-image: url({{ Storage::url($product->thumbnail) }});">

			</div>
			<div class="product-content">
				<h4 class="is-size-6 has-text-centered">{{ $product->title }}</h4>
				<p class="m-t-20 has-text-centered">€ {{ $product->price }}</p>

				<div class="columns product-item-icons">
					<div class="column">
							<a href="{{ route('producten.edit', ['id' => $product->id]) }}"><img src="{{ asset('images/icons/edit.svg') }}" alt=""></a>
					</div>
					<div class="column">

						<form action="{{ route('producten.delete', ['id' => $product->id]) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button class="icon-button"><img src="{{ asset('images/icons/trash.svg') }}" alt=""></button>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>
@endforeach
</div>
@endsection
