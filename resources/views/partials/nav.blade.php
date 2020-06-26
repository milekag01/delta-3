{{--<a href="{{ route('home') }}" class="logo-section">--}}
	{{--<img src="{{\App\Helpers\Helpers::logoUrl()}}" alt="Delta">--}}
{{--</a>--}}

<div class="user-section">
	<a href="{{ route('profile') }}"><img class="circle" src="{{ App\User::get_gravatar(Auth::user()->email) }}">
	<p>{{Auth::user()->full_name}}</p>
	</a>
</div>

<form action="/search" method="get">
	@csrf
	<div class="form-group search">
		<input type="text" name="q" class="form-control search-bar" placeholder="Search">
	</div>
</form>


<div class="menu">
	<a class="<?php echo ( Request::is('hud') ) ? 'active' : 'false'; ?> <?php echo ( Request::is('/') ) ? 'active' : 'false'; ?>" href="{{ route('home') }}"><i class="icon ion-ios-home"></i> Hud</a>
	<a class="<?php echo ( Request::is('clients') ) ? 'active' : 'false'; ?>" href="{{ route('clients') }}"><i class="icon ion-person"></i> Clients</a>
	<a class="<?php echo ( Request::is('profile') ) ? 'active' : 'false'; ?>" href="{{ route('profile') }}"><i class="icon ion-gear-b"></i> Settings</a>
	<a href="{{ route('logout') }}"><i class="icon ion-android-exit"></i> Logout</a>
</div>

<div class="line"><hr></div>

