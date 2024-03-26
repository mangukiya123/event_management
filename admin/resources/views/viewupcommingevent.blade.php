@include('header');


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VIEW UPCOMMING EVENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">upcomming event</li>
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
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive">
                  <thead>
                  <tr>
                  <th>Id</th>
                    <th>title</th>
                    <th>subtitle1</th>
                    <th>subtitle2</th>
                    <th>information</th>
                    <th>time</th>
                    <!-- <th>place</th> -->
                    <!-- <th>event details</th> -->
                    <th>image</th>
                    <!-- <th>bookticket</th> -->
                    <th>Delete</th>
                    <th>Update</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($upcommin_data as $eventss) 
                  <tr>
                    <td>{{$eventss->id}}</td>
                    <td>{{$eventss->main_title}}</td>
                    <td>{{$eventss-> sub_title1}}</td>
                    <td>{{$eventss-> sub_title2}}</td>
                    <td>{{$eventss-> information}}</td>
                    <td>{{$eventss-> time}}</td>
                    <!-- <td>{{$eventss-> place}}</td> -->
                    <!-- <td>{{$eventss-> event_details}}</td> -->
                    <td><img src="{{asset('images/'.$eventss->image)}}" height="50px" width="50px"></td>
                    <!-- <td>{{$eventss-> book_ticket}}</td> -->
                    <td><a href="delete_upevent/{{$eventss->id}}"><ion-icon name='trash-outline'></ion-icon></a></td>
                     <td><a href="update_upevent/{{$eventss->id}}"><ion-icon name='create-outline'></ion-icon></a></td>



                  
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
