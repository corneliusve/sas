<nav class="navbar navbar-home">
	<div class="container" class="">
		<div class="navbar-start">
			<h1 class="logo"><a href="/">Kadootje van Sas</a></h1>
		</div>
		<div class="navbar-end">

			<a class="navbar-item" href="{{ route('home') }}">Kadootjes</a>
			<div class="devider"></div>

			@guest()

				<a class="navbar-item" href="{{ route('register') }}">Aanmelden</a><span style="color: white;">/</span>
				<a class="navbar-item" href="{{ route('login') }}">log in</a>

			@else

				<a class="navbar-item" href="{{ route('account', ['id' => Auth::user()->id]) }}">Account</a>

				<a class="navbar-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
					Logout
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>


			@endguest


		</div>
	</div>



</nav>
