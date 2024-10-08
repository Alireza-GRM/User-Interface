@extends('layouts.Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row container-custom">
            <!-- Sign In Form -->
            <div class="col-md-12 form-container">
                <h1 class="text-center mb-3" style="font-size: 28px;">ثبت نام</h1>
                <div class="social-icons d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input placeholder="نام کاربری" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input placeholder="آدرس ایمیل" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input placeholder="شماره تماس" id="NumberPhone" type="text" class="form-control @error('NumberPhone') is-invalid @enderror" name="NumberPhone"  value="{{ old('NumberPhone') }}" autocomplete="NumberPhone" autofocus>
                    @error('NumberPhone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="image" class="me-2 mt-1">یک نمایه برای پروفایل انتخاب کنید:</label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <select class="form-control mb-3 @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language') }}" required autocomplete="language" autofocus>
                        <option value="fa">فارسی</option>
                        <option value="en">انگلیسی</option>
                    </select>

                    <input placeholder="تاریخ تولد" id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input placeholder="کد معرف" id="referral" type="text" class="form-control" name="referral" value="{{ old('referral') }}" autocomplete="referral" autofocus>

                    <input placeholder="رمزعبور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input placeholder="تکرار رمزعبور" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <button type="submit" class="btn w-100 mt-4">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
@endsection
