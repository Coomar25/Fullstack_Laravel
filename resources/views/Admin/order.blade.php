@extends('Admin.adminmaster.adminmaster')


@section('admin_order')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="section ">
            <div class="row text-center justify-content-evenly mt-3 mb-3">
                <div class="col-md ">
                    <h1>PLACED ORDER</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <table class="table table-secondary table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product_Name</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Method</th>
                            <th scope="col">State | City</th>
                            <th scope="col">status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_info as $order_intel)
                            <tr>
                                <th>{{ $order_intel->checkout_productname }}</th>
                                <th>{{ $order_intel->checkout_price }}</th>
                                <th>{{ $order_intel->checkout_quantity }}</th>
                                <th>{{ $order_intel->checkout_name }}</th>
                                <th>{{ $order_intel->checkout_number }}</th>
                                <th>{{ $order_intel->checkout_email }}</th>
                                <th>{{ $order_intel->checkout_method }}</th>
                                <th>{{ $order_intel->checkout_state }} | {{ $order_intel->checkout_city }} </th>
                                <th class="mt-1"mb-1>
                                    <form action="{{ route('checkout.update', $order_intel->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden">
                                        <select name="checkout_status" id="">
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                        <input type="text" name="status" value="{{ $order_intel->checkout_status }}"
                                            disabled>
                                        <div>
                                            <button type="button" class="btn btn-primary mt-2 linkcolor ">
                                                <input type="submit" value="Update">
                                            </button>
                                            <button type="button" class="btn btn-danger mt-2 linkdeletecolor">

                                                <a href=""> Delete</a>
                                            </button>
                                        </div>
                                    </form>
                                </th>



                            </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
@endsection
