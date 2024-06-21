@extends('web.app.app')
@section('main-body')
<!-- slider start here -->
@include('web.component.hero')
<!-- slider end here -->

<!-- top brands start here -->
@include('web.component.brands')
<!-- top brands end here -->


<!-- product start here -->
@include('web.component.product')
<!-- product end here -->

<!-- about start here -->
@include('web.component.about')
<!-- about end here -->

<!-- blog start here -->
{{-- @include('web.component.blog') --}}
<!-- blog end here -->


@endsection
