@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Sign in to continue to {{ $content->website_name }}.</h5>

                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('uploads/content/' . $content->website_logo) }}" alt=""
                              class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">

                    <div class="p-2">
                        <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">

                                    <input id="password" type="password"
                                      class="form-control @error('password') is-invalid @enderror"
                                      placeholder="Enter password" name="password" required
                                      autocomplete="current-password" aria-label="Password"
                                      aria-describedby="password-addon">
                                    <button class="btn btn-light " type="button" id="password-addon"><i
                                          class="mdi mdi-eye-outline"></i></button>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <div class="mt-3 d-grid">

                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                            </div>



                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-5 text-center">

                <div>
                </div>
            </div>

        </div>



    </div>
</div>
@endsection