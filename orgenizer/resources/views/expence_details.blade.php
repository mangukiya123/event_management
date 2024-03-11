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
                <h3 class="card-title">About Payment</h3>  
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Expence_Date</th>
                      <th>Expence_Price</th>
                      <th>Expence_Details<th>
                      <th>Delete</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($expence_details as $num){ ?>
                    <tr>
                      <td>{{$num->id}}</td>
                      <td>{{$num->expence_date}}</td>
                      <td>{{$num->expence_price}}</td>
                      <td>{{$num->expence_details}}</td>
                      <td><a href="delete_expence/{{$num->id}}"><ion-icon name='trash-outline'></ion-icon></a><td>
                      <td><td>
                      <td><a href="update_expence/{{$num->id}}"><ion-icon name='create-outline'></ion-icon></a><td>
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
