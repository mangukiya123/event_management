@include('staff_header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Speaker Information</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About Speacker</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Speaker Name</th>
                      <th>Speaker Email</th>
                      <th>Speaker Image</th>
                      <th>Speaker Contact</th>
                      <th>Speaker Date</th>
                      <th>Speaker Time</th>
                      <th>experience</th>
                      <th>Speaker City</th>
                      <th>Speaker Information</th>
                      <th>Delete</th>
                      <th><th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($speaker_details as $num){ ?>
                    <tr>
                      <td>{{$num->id}}</td>
                      <td>{{$num->speaker_name}}</td>
                      <td>{{$num->speaker_email}}</td>
                      <td><img src="{{asset('speaker_images/'.$num->speaker_image)}}" height="100px" width="100px"></td>
                      <td>{{$num->speaker_contact}}</td>
                      <td>{{$num->speaker_date}}</td>
                      <td>{{$num->speaker_time}}</td>
                      <td>{{$num->experience}}</td>
                      <td>{{$num->speaker_city}}</td>
                      <td>{{$num->speaker_info}}</td>
                      <td><a href="delete_speaker/{{$num->id}}"><ion-icon name='trash-outline'></ion-icon><a><td>
                      <td><a href="update_speaker/{{$num->id}}"><ion-icon name='create-outline'></ion-icon></a><td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
@include('footer');
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->