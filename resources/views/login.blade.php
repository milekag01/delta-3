@extends('templates.outs.auth')

@section('content')

    <div class="special-form">
        <a href="{{ route('home') }}"><img src="{{ \App\Helpers\Helpers::logoUrl()  }}" alt=""></a>
        <h3 class="text-center">LOGIN</h3>

        @if ($errors->first())
            <span class="status-msg error-msg">{{ $errors->first() }}</span>
        @endif

        <hr>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="email" class="color-primary">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
                <!-- {!! Form::text( 'email', null, array('class' => 'form-control', "placeholder" => "Email","autofocus" => "true" )) !!} -->
            </div>
            
            <div class="form-group">
                <label for="password" class="color-primary">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <!-- {!! Form::password( 'password', array('class' => 'form-control', "placeholder" => "Password" )) !!} -->
            </div>
            
            <div class="form-group">
                <!-- {!! Form::submit( 'Login', array('class' => 'btn btn-primary btn-wide')) !!} -->
                <input type="submit" value="Login" class="btn btn-primary btn-wide">
            </div>
        </form>
        <!-- {!! Form::open(array('action' => 'UsersController@login')) !!} -->
        
        
        <!-- {!! Form::close() !!} -->
        <p>Don't have an account? <a href="{{ route('register') }}">register</a></p>
    </div>
@stop