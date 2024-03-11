@include('header');


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VIEW EVENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Event</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive">
                  <thead>
                  <tr>
                  <th>Id</th>
                    <th>Event name</th>
                    <th>Event Date</th>
                    <th>Event Time</th>
                    <!-- <th>Event Details</th>
                    <th>Event Price</th>
                    <th>Event Place</th>
                    <th>Event City</th>
                    <th>Event Address</th>
                    <th>image</th>
                    <th>Start Booking Date</th>
                    <th>Event Organization Name</th>
                    <th>Event Speaker Name</th>
                    <th>Max Seats</th> -->
                    <th>Delete</th>
                    <th>Update</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($event_data as $events) 
                  <tr>
                    <td>{{$events->id}}</td>
                    <td>{{$events-> name }}</td>
                    <td>{{$events->event_date}}</td>
                    <td>{{$events->event_time}}</td>
                    <!-- <td>{{$events->event_details}}</td>
                    <td>{{$events->event_price}}</td>
                    <td>{{$events->event_place}}</td>
                    <td>{{$events->event_city}}</td>
                    <td>{{$events->event_address}}</td>
                    <td>{{$events->image}}</td>
                    <td>{{$events->start_date_booking}}</td>
                    <td>{{$events->event_organization_team_nme}}</td>
                    <td>{{$events->event_speaker_nae}}</td>
                    <td>{{$events->max_seats}}</td> -->
                    <td><a href="delete_event/{{$events->id}}"><ion-icon name='trash-outline'></ion-icon></a></td>
                     <td><a href="update_event/{{$events->id}}"><ion-icon name='create-outline'></ion-icon></a></td>



                  
                  </tr>
                 @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


     




<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>
</body>
</html>
