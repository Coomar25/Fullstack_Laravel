@extends('Admin.adminmaster.adminmaster')

@section('admin_addproduct')
    <br><br><br><br><br><br><br><br>
    <div class="section">
        <div class="container-fluid">
            <div class="row mt-3 justify-content-evenly">
                <div class="col-md-3">
                    <!-- ================================================================ -->

                    <h2 class="mt-2 text-center">Add Categories</h2>
                    <div class="mb-3">



                        <label for="exampleFormControlInput1" class="form-label">Product</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product Name" />

                        <div class="mt-3">
                            <button type="submit" class="addproductbutton">Submit</button>
                        </div>
                    </div>

                    <!-- ===================================================================== -->
                    <h2 class="mt-2 text-center">Update Product</h2>

                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                value="{{ $product->name }}" placeholder="Product Name" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product</label>
                            <input type="number" name="price" class="form-control" id="exampleFormControlInput1"
                                value="{{ $product->price }}" placeholder="Product Price" />
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">You can choose multiple image file</label>
                            <input class="form-control" name="image" type="text" value="$product->image"
                                id="formFileMultiple" multiple />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                            <textarea class="form-control" name="description" value="{{ $product->description }}" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <button type="submit">
                            <input class="addproductbutton" type="submit" value="Update">

                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
