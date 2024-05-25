@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">General Content</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">content</a></li>
                                <li class="breadcrumb-item active">General Content</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('general.update', $content->id) }}"
                              enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Website Logo</label>
                                        <input type="file" class="form-control dropify" id="image" name="website_logo"
                                          data-default-file="{{ asset('uploads/content/' . $content->website_logo) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Website Favicon</label>
                                        <input type="file" class="form-control dropify" id="image"
                                          name="website_favicon"
                                          data-default-file="{{ asset('uploads/content/' . $content->website_favicon) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Website name</label>
                                        <input type="text" class="form-control" id="title" name="website_name"
                                          value="{{ $content->website_name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subtitle" class="form-label">Website Slogan (Optional)</label>
                                        <input type="text" class="form-control" id="website_slogan" name="website_slogan"
                                          value="{{ $content->website_slogan }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="subtitle" class="form-label">Website Description</label>
                                        <textarea type="address" class="form-control" id="subtitle" name="website_description" cols="30" rows="5" required>{{ $content->website_description }}</textarea>

                                        {{-- <input type="text" class="form-control" id="subtitle" name="website_description"
                                          value="{{ $content->website_description }}" required> --}}
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->


    {{-- </div> --}}
    @endsection