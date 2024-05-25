@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Create Product</li>
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
                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label">Product Category :</label>
                                        <select id="category" name="product_category" onchange="getcat(this.value)" class="form-select">

                                            <option selected="">Choose...</option>
                                            @foreach ($Categories as $data)
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_sub_category" class="form-label">Product Sub Category :</label>
                                        <select id="product_sub_category" name="product_sub_category" class="form-select">



                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="summernote" name="description" rows="10">

                                            </textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control dropify" id="image" name="image"
                                          data-default-file="{{ old('image') }}" required>
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
<script>
    function getcat(categoryId) {
        fetch(`http://localhost/danyelsas/getsubcat/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    const subcategorySelect = document.getElementById("product_sub_category");
                    subcategorySelect.innerHTML = ""; // Clear previous options

                    data.forEach(subcategory => {
                        const option = document.createElement("option");
                        option.value = subcategory.id;
                        option.text = subcategory.title;
                        subcategorySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching subcategories:", error);
                });
    }
</script>

    {{-- </div> --}}
    @endsection
