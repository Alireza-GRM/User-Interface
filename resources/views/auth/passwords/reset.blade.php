@extends('layouts.Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row container-custom">
            <!-- Sign In Form -->
            <div class="col-md-6 form-container">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="text-center mb-4" style="font-size: 23px;">تغییر رمزعبور</h1>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <input placeholder="آدرس ایمیل" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input placeholder="رمزعبور جدید" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input placeholder="تکرار رمزعبور جدید" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <button type="submit" class="btn w-100 mt-4">اعمال تغییر</button>
                </form>
            </div>

            <!-- Toggle Panel -->
            <div class="col-md-6 toggle-panel d-none d-md-block">
                <h4>تغییر رمزعبور</h4>
                <p>لطفا یک گذرواژه جدید برای خود ثبت کنید</p>
            </div>
        </div>
    </div>
@endsection
