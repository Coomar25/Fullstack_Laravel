@extends('Admin.adminmaster.adminmaster')


@section('admin_dashboard')

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
crossorigin="anonymous"
></script>
<br><br><br><br><br><br><br><br>
<div class="section ">
    <div class="container-fluid">
      <div class="row justify-content-evenly mt-5">
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">WelCome</div>
            <div class="card-body">
              <h5 class="card-title">Name Of Admin Must Appear Here</h5>

              <a href="#" class="btn btn-primary"> Edit Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">NRS.1000</div>
            <div class="card-body">
              <h5 class="card-title">Total Pending Order's</h5>

              <a href="order.html" class="btn btn-primary"> Observe Order </a>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================================================== -->
      <div class="row justify-content-evenly mt-5">
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">Nrs. 1000</div>
            <div class="card-body">
              <h5 class="card-title">Total Completed Orders</h5>

              <a href="order.html" class="btn btn-primary"> Observe Orders</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">3</div>
            <div class="card-body">
              <h5 class="card-title">Total Number of order here</h5>

              <a href="order.html" class="btn btn-primary">Observe Orders</a>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================================= -->
      <div class="row justify-content-evenly mt-5 mb-5">
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">4</div>
            <div class="card-body">
              <h5 class="card-title">Total Products Added</h5>

              <a href="order.html" class="btn btn-primary"> Observe Orders</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card text-center">
            <div class="card-header">10</div>
            <div class="card-body">
              <h5 class="card-title">Total Number Of user</h5>

              <a href="user.html" class="btn btn-primary"> Analize User</a>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================================= -->
    </div>
  </div>




@endsection