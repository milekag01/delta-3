@extends('templates.outs.auth')

@section('content')

    <div class="special-form">
        <a href="{{ route('home') }}"><img src="{{ \App\Helpers\Helpers::logoUrl()  }}" alt=""></a>
        <h3 class="text-center">REGISTER</h3>

        @if ($errors->first())
            <span class="status-msg error-msg">{{ $errors->first() }}</span>
        @endif
        
        <hr>
        <!-- {!! Form::open(array('action' => 'UsersController@register')) !!} -->
        <form action="/make" method="post">
            <div class="form-group">
                <label for="fullName" class="color-primary">Full Name:</label>
                <input type="text" class="form-control" name="fullName" placeholder="Full Name" autofocus required>
                <!-- {!! Form::text('fullName', null, array('class' => 'form-control', "placeholder" => "Full name", "autofocus" => "true" )) !!} -->
            </div>
            
            <div class="form-group">
                <label for="email" class="color-primary">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <!-- {!! Form::text('email', null, array('class' => 'form-control', "placeholder" => "Email" )) !!} -->
            </div>
            
            <div class="form-group">
                <label for="password" class="color-primary">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <!-- {!! Form::password('password', array('class' => 'form-control', "placeholder" => "Password" )) !!} -->
            </div>
            
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary btn-wide">
                <!-- {!! Form::submit('Register', array('class' => 'btn btn-primary btn-wide' )) !!} -->
            </div>
        </form>
        
        
        <!-- {!! Form::close() !!} -->
        
        <p>Have an account? <a href="{{ route('login') }}">login</a></p>
    </div>
@stop


