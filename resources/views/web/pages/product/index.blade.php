@extends('web.app.app')
@section('main-body')
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Products</span> </h2>

        </div>
    </div>
</div>
@include('web.component.product')
@endsection