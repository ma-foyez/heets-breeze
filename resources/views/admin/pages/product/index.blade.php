@extends('admin.app.app')
@section('styles')
<!-- DataTables -->
<link href="{{ asset('') }}assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
  type="text/css" />
<link href="{{ asset('') }}assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
  type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('') }}assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
  rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Dashboards</li>
                                <li class="breadcrumb-item active">Product</li>
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

                            <a class="btn btn-soft-primary waves-effect waves-light mb-2"
                              href="{{ route('products.create') }}">
                                + Create New Product </a>

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>status</th>
                                        <th>Order</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            @if ($product->status == 1)
                                            <span
                                              class="badge rounded-pill badge-soft-success font-size-11">Active</span>
                                            @else
                                            <span
                                              class="badge rounded-pill badge-soft-danger font-size-11">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->order }}</td>

                                        <td>{{ $product->category?->title }}</td>
                                        <td>{{ $product->subcategory?->title }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td class="text-wrap">{!! $product->description !!}</td>
                                        <td>
                                            @if ($product->image)
                                            <img src="{{ asset('uploads/products/' . $product->image) }}"
                                              alt="{{ $product->title }}" width="80">
                                            @else
                                            No Image
                                            @endif
                                        </td>


                                        <td>
                                            @if ($product->status == 1)
                                            <a class="btn btn-danger waves-effect btn-circle waves-light"
                                              href="{{ route('products.inactive', $product->id) }}">
                                                <i class="fa fa-eye-slash"></i> </a>
                                            @else
                                            <a class="btn btn-success waves-effect btn-circle waves-light"
                                              href="{{ route('products.active', $product->id) }}">
                                                <i class="fa fa-eye"></i> </a>
                                            @endif

                                            <a class="btn btn-primary waves-effect btn-circle waves-light"
                                              href="{{ route('products.edit', $product->id) }}">
                                                <i class="fa fa-edit"></i> </a>
                                            <form hidden action="{{ route('products.destroy', $product->id) }}"
                                              id="form{{ $product->id }}" method="get">
                                                @csrf
                                            </form>
                                            <button class="btn btn-danger waves-effect btn-circle waves-light"
                                              onclick="deleteItem({{ $product->id }});" type="button">
                                                <i class="fa fa-trash"></i> </button>
                                        </td>
                                        {{-- <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm
                                        btn-warning">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                          style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                              onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
@endsection
@section('scripts')
<script>
    function deleteItem(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('ok');
                    document.getElementById(`form${id}`).submit();
                }
            })
        }
</script>
@endsection
