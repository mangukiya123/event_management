@include('header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Amzing Event</h1>
          </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              @foreach($update_data as $insert_event_query)

              <form  method="post" enctype="multipart/form-data">
               @CSRF
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Date</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_date" placeholder="Enter Event Date" name="event_date" value="{{$insert_event_query->event_date}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Time</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_time" placeholder="Enter Event Time" name="event_time" value="{{$insert_event_query->event_time}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="input_e_detail" placeholder="Enter Event image" name="event_image" value="{{$insert_event_query->event_image}}" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Start Date Booking</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_start_date_booking" placeholder="Enter Event Start Date Booking" name="event_start_date_booking" value="{{$insert_event_query->event_start_date_booking}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Details</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_detail" placeholder="Enter Event Details" name="event_detail" value="{{$insert_event_query->event_detail}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Orgnize Team name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_org_team_name" placeholder="Enter Event Orgnize Team name" name="event_organize_team_name" value="{{$insert_event_query->event_organize_team_name}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_price" placeholder="Enter Event Price" name="event_price" value="{{$insert_event_query->event_price}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Place</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_place" placeholder="Enter Event Place" name="event_place" value="{{$insert_event_query->event_place}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event City</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_city" placeholder="Enter Event City" name="event_city" value="{{$insert_event_query->event_city}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_address" placeholder="Enter Event Address" name="event_address" value="{{$insert_event_query->event_address}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Speacker Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="input_e_speacker_name" placeholder="Enter Event Speacker Name" name="speacker_name" value="{{$insert_event_query->speacker_name}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-info" value="Create"  name="insert">
                </div>
                <!-- /.card-footer -->
              </form>

              @endforeach
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>