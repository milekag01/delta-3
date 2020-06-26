@extends('templates.outs.auth')

@section('content')

    <div class="special-form">
        <a href="{{ route('home') }}"><img src="{{ \App\Helpers\Helpers::logoUrl()  }}" alt=""></a>
        <h3 class="text-center">REGISTER</h3>

        @if ($errors->first())
            <span class="status-msg error-msg">{{ $errors->first() }}</span>
        @endif
        
        <hr>
        
        <form action="/make" method="post">
            @csrf
            <div class="form-group">
                <label for="fullName" class="color-primary">Full Name:</label>
                <input type="text" class="form-control" name="fullName" placeholder="Full Name" autofocus required>
                
            </div>
            <div class="form-group">
                <label for="email" class="color-primary">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Email" required>
              
            </div>
            <div class="form-group">
                <label for="password" class="color-primary">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              
            </div>
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary btn-wide">
            </div>
        </form>
        
        <p>Have an account? <a href="{{ route('login') }}">login</a></p>
    </div>
@stop


