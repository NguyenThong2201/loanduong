@extends('layouts.pagedetail')

@section('content')
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Registration</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Registration</span></h1>
        <div class="auth-wrap">
            <div class="auth-col">
                <h2>Register</h2>
                <form method="POST" action="{{ route('register') }} class="register">
                    {{ csrf_field() }}
                    <p class="{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="reg_email">Name <span class="required">*</span></label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="reg_email">Name <span class="required">*</span></label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="reg_email">Password <span class="required">*</span></label>
                        <input id="password" type="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p>
                        <label for="reg_password">Confirm Password <span class="required">*</span></label>
                        <input id="password-confirm" type="password" name="password_confirmation" required>
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Register">
                    </p>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- Main Content - end -->
@endsection
