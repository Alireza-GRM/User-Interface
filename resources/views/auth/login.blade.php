@extends('layouts.Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row container-custom">
            <!-- Sign In Form -->
            <div class="col-md-6 form-container">
                <h1 class="text-center mb-3" style="font-size: 28px;">ورود</h1>
                <div class="social-icons d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <input placeholder="نام کاربری" id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input placeholder="رمزعبور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if (Route::has('password.request'))
                        <a class="text-dark mt-5" href="{{ route('password.request') }}">آیا رمز عبور را فراموش کرده اید؟</a>
                    @endif
                    <button type="submit" class="btn w-100 mt-4">ورود</button>
                </form>
            </div>

            <!-- Toggle Panel -->
            <div class="col-md-6 toggle-panel d-none d-md-block">
                <h3>خوش آمدید</h3>
                <p>برای استفاده از تمامی امکانات سایت، با مشخصات شخصی خود ثبت نام کنید</p>
                <a class="btn " href="{{ route('register'); }}">ثبت نام</a>
            </div>
        </div>
    </div>
@endsection
