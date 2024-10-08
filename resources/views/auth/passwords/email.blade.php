@extends('layouts.Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row container-custom">
            <!-- Sign In Form -->
            <div class="col-md-12 form-container">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="text-center mb-3" style="font-size: 20px;">بازیابی رمزعبور</h1>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf

                    <input placeholder="آدرس ایمیل" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="btn w-100 mt-4">بازیابی</button>
                </form>
            </div>
        </div>
    </div>
@endsection
