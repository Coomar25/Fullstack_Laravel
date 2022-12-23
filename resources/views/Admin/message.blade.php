@extends('Admin.adminmaster.adminmaster')

@section('admin_message')
    <br><br><br><br><br><br><br><br>

    <div class="section">
        <div class="row text-center mt-3 mb-3">
            <div class="col-md">
                <h1>User Status</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($User_Message as $UserMessage)
                        <tr>
                            <th scope="row">{{ $UserMessage->id }}</th>
                            <th>{{ $UserMessage->name }}</th>
                            <th>{{ $UserMessage->email }}</th>
                            <th>{{ $UserMessage->number }}</th>

                            <th class="mt-1"mb-1>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                User's Message
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> {{ $UserMessage->msg }}</div>
                                        </div>
                                    </div>
                                </div>
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
