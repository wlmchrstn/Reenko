@extends('layouts.app')

@section('title', 'Reenko - Login')

@section('head')
    <link rel="stylesheet" href="/css/landing/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
@endsection

@section('content')
    <section class="login">
        <div class="container-sm login-container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <img class="logo" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="logo">
                <h1 class="navbar-brand">Reenko</h1>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="login-email" type="text" placeholder="Email" aria-label="Email">
                    <input class="form-control mr-sm-2" name="login-password" type="password" placeholder="Password" aria-label="Password">
                    <button class="btn button-primary my-2 my-sm-0" type="submit">Login</button>
                </form>
            </nav>
        </div>
    </section>
    <section class="register">
        <div class="container-sm register-container">
            <div class="register-wrapper register-quote">
                <div class="register-quote-wrapper">
                    <img src="{{URL::asset('/images/search.svg')}}" alt="search">
                    <p class="login-quote-container-text">SIMP your interest.</p>
                </div>
                <div class="register-quote-wrapper">
                    <img src="{{URL::asset('/images/text.svg')}}" alt="search">
                    <p class="login-quote-container-text">Join the rabbit hole.</p>
                </div>
                <div class="register-quote-wrapper">
                    <img src="{{URL::asset('/images/emoji.svg')}}" alt="search">
                    <p class="login-quote-container-text">Have fun simping.</p>
                </div>
            </div>
            <div class="register-wrapper register-form">
                <div class="register-multiple-form">
                    <input class="form-control form-register fullname" name="first-name" type="text" maxlength="32" placeholder="First Name" aria-label="First Name">
                    <input class="form-control form-register fullname" name="last-name" type="text" maxlength="32" placeholder="Last Name" aria-label="Last Name">
                </div>
                <input class="form-control form-register " name="email" type="email" placeholder="Email" aria-label="Email">
                <div class="password-wrapper">
                    <input id="password" class="form-control form-register " name="password" type="password" maxlength="32" placeholder="Password" aria-label="Password">
                    <i class="far fa-eye" id="togglePassword"></i>
                </div>
                <input class="form-control form-register " name="password-confirmation" type="password" maxlength="32" placeholder="Confirm your password" aria-label="Confirm your password">
                <small class="form-text text-muted">
                    Date of birth
                </small>
                <div class="register-multiple-form">
                    <select class="form-control date" name="birthday_day" aria-label="Day">
                        @for ($i = 1; $i <= 31; $i++)
                            <option value={{$i}}>{{$i}}</option>
                        @endfor
                    </select>
                    <select class="form-control date"  name="birthday_month" aria-label="Month">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Des">Des</option>
                    </select>
                    <select class="form-control date"  name="birthday_year" aria-label="Year">
                        @for ($i = 2007; $i >= 1950; $i--)
                            <option value={{$i}}>{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <small class="form-text text-muted">
                    Gender
                </small>
                <select class="form-control form-register">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Custom">Custom</option>
                </select>
                <small class="form-text text-muted form-register">
                    By clicking Sign Up, you agree to our
                    <a href="terms" target="_blank" rel="nofollow">Terms</a>,
                    <a href="data_policy" target="_blank" rel="nofollow">Data Policy</a>
                    and
                    <a href="cookie_policy" target="_blank" rel="nofollow">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
                </small>
                <button class="btn button-primary shadowbox" type="submit">Sign Up</button>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        })
    </script>
@endsection