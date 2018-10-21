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
                <span>Registration / Login</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Registration / Login</span></h1>
        <div class="auth-wrap">
            <div class="auth-col">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}" class="login">
                    {{ csrf_field() }}
                    <p class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username">E-mail <span class="required">*</span></label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password <span class="required">*</span></label>
                        <input id="password" type="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Login">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="rememberme">Remember me</label>
                    </p>
                    <p class="auth-lost_password">
                        <a href="{{ route('password.request') }}">Lost your password?</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- Main Content - end -->
@endsection
