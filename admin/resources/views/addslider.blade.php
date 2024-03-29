@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD SLIDER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></lai>
              <li class="breadcrumb-item active">Slider</li>
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
            
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="SubTitle" name="date">
                  </div>
                  <div class="form-group"> 
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sub Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event SubTitle" name="subtitle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Ticket</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Book Ticket" name="bookticket">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Details</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event  Details" name="event_details">
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
  