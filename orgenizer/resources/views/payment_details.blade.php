@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Speaker Information</h1>
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
                <h3 class="card-title">About Payment</h3>  
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Payment Amount</th>
                      <th>Payment Details</th>
                      <th>Delete</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($payment_details as $num){ ?>
                    <tr>
                      <td>{{$num->id}}</td>
                      <td>{{$num->payment_amount}}</td>
                      <td>{{$num->payment_details}}</td>
                      <td><a href="delete_payment/{{$num->id}}"><ion-icon name='trash-outline'></ion-icon></a><td>
                      <td><td>
                      <td><a href="update_payment/{{$num->id}}"><ion-icon name='create-outline'></ion-icon></a><td>
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