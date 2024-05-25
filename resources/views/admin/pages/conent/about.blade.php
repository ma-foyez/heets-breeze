@extends('admin.app.app')
@section('main-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">About Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">content</a></li>
                                    <li class="breadcrumb-item active">About Content</li>
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
                                <form method="POST" action="{{ route('about.update', $content->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="description" class="form-label">About Content</label>
                                            <textarea class="form-control" id="summernote" name="about_content" rows="10">
                                        {!! $content->about_content !!}
                                    </textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="image" class="form-label">About Image 1</label>
                                            <input type="file" class="form-control dropify" id="image"
                                                name="about_image"
                                                data-default-file="{{ asset('uploads/content/' . $content->about_image) }}">
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
