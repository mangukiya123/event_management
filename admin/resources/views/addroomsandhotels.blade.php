@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD ROOMS AND HOTELS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rooms AND Hotels</li>
            </ol>
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
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
              @CSRF
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ratting</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ratting" name="ratting">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Siting</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Siting" name="siting">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name">
                  </div>
                  <div class="form-group"> 
                    <label for="exampleInputPassword1">Details</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Details" name="deatils">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Localtion</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Location" name="localtion">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="ADD" name="add">
                </div>
              </form>
            </div>
            <!-- /.card --> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer');
  