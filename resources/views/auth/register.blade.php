@extends('web.app.app')

@section('main-body')
<section class="bg-half-150 d-table w-100 bg-light" style="background: url('../assets/images/bg/bg-lines-one.png') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <img src="../assets/images/logo-dark.png" height="22" class="mx-auto d-block" alt="">
                <div class="card login-page shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <h4 class="text-center">Sign Up</h4>  
                        <form action="{{ route('register') }}" method="POST" class="login-form mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">                                               
                                        <label class="form-label">User name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name" name="name" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                        <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="phone" name="phone" required="">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3 text-center">
                                    <h6 class="text-muted">Or</h6>
                                </div><!--end col-->
                                
 
                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account?</small> <a href="{{ route('login') }}" class="text-dark fw-bold">Sign in</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section>

@endsection
