@extends('layouts.Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row container-custom">
            <!-- Sign In Form -->
            <div class="col-md-12 form-container">
                <h1 class="text-center mb-3" style="font-size: 28px;">تایید کد</h1>
                <p class="text-center mb-3">لطفا کدی که به ایمیلتان ارسال شده رو وارد کنید</p>
                <div class="social-icons d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <form action="{{ route('verification.code') }}" method="POST">
                    @csrf

                    <input placeholder="کد ارسال شده" id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required autofocus>
                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="btn w-100 mt-4">بررسی و ورود</button>
                </form>
            </div>
        </div>
    </div>
@endsection