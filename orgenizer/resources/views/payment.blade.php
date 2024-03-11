@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Payment</h1>
          </div>
          <div class="col-sm-6">
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Employee_Payment_Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
              @CSRF
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount" name="payment_amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amount Details</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Detail" name="payment_details">
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Send" name="payment">
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('footer');