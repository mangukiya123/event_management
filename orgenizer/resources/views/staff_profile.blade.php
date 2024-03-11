@include('staff_header');

  <!-- Content Wrapper. Contains page content -->
  CSRF
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile's</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
        @foreach($data as $staff)
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"  src="{{asset('staff_images/'.$staff->image)}}"  alt="User profile picture">
                </div>
                
                <h3 class="profile-username text-center">{{$staff->staff_name}}</h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$staff->staff_email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">{{$staff->staff_address}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone_no</b> <a class="float-right">{{$staff->phone_no}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Higher_Date</b> <a class="float-right">{{$staff->staff_birthdate}}</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
           
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          @endforeach       
        </div>
   
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer');