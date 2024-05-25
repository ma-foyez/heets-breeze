@extends('admin.app.app')
@section('main-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Contact Info</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">content</a></li>
                                    <li class="breadcrumb-item active">Contact Info</li>
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
                                <form method="POST" action="{{ route('contact.update', $content->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="website_email" class="form-label">Website Email</label>
                                            <input type="email" class="form-control" id="website_email"
                                                name="website_email" value="{{ $content->website_email }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="website_phone" class="form-label">Website Phone</label>
                                            <input type="phone" class="form-control" id="website_phone"
                                                name="website_phone" value="{{ $content->website_phone }}" required>
                                        </div>
                                   
                                            <div class="col-md-6">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" class="form-control" id="facebook_page" name="facebook_page"
                                                  value="{{ $content->facebook_page }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="facebook" class="form-label">Instagram</label>
                                                <input type="text" class="form-control" id="instagram_page" name="instagram_page"
                                                  value="{{ $content->instagram_page }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="whatsapp" class="form-label">whatsapp</label>
                                                <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number"
                                                value="{{ $content->whatsapp_number }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="skype" class="form-label">Skype</label>
                                                <input type="text" class="form-control" id="skype" name="skype"
                                                  value="{{ $content->skype }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="linkdin" class="form-label">Linkdin</label>
                                                <input type="text" class="form-control" id="linkedin_page" name="linkedin_page"
                                                  value="{{ $content->linkedin_page }}">
                                            </div>
                                         
                                            <div class="col-md-6">
                                                <label for="youtube" class="form-label">Youtube</label>
                                                <input type="text" class="form-control" id="youtube" name="youtube"
                                                  value="{{ $content->youtube }}">
                                            </div>
                                           

                                            <div class="col-md-12">
                                                <label for="office_address" class="form-label">Office Address</label>
                                                <textarea type="address" class="form-control" id="office_address" name="office_address" cols="30" rows="5" required>{{ $content->office_address }}</textarea>
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
