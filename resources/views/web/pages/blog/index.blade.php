@extends('web.app.app')
@section('main-body')

@include('web.inc.page-cover', [
    'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
    'pageTitle' => 'Blogs',
    'breadcrumb' => 'Blogs',
])

@include('web.component.blog')
@endsection