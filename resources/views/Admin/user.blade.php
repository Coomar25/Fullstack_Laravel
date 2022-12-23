@extends('Admin.adminmaster.adminmaster')



@section('admin_user')
    <br><br><br><br><br><br>

    <div class="section container-fluid">
        <div class="row text-center mt-3 mb-3 ">
            <div class="col-md mt-3 mb-3">
                <h1 class="text-large">User Status</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-evenly">
        <div class="col-md-10">
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th scope="col">status</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($users_info as $users_intel)
                        <tr>
                            <th scope="row">1</th>
                            <th>{{ $users_intel->name }}</th>
                            <th>{{ $users_intel->email }}</th>
                            <th>{{ $users_intel->password }}</th>
                            <th class="mt-1"mb-1>
                                <form action="" method="">
                                    <div>

                                        <button type="button" class="btn btn-danger mt-2 linkdeletecolor"> <a
                                                href=" " onclick="return confirm(' i lova love you')">Delete</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection()
