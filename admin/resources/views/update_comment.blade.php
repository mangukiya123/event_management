@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD COMMENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Comment</li>
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
              @foreach($update_data as $comment)
              <form method="post" enctype="multipart/form-data">
              @CSRF
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Time" name="name" value="{{$comment->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Comment</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="SubTitle" name="comment" value="{{$comment->cmt}}">
                  </div>
                  <div class="form-group"> 
                    <label for="exampleInputPassword1">Customer Id</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Price" name="cusid" value="{{$comment->customer_id}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Evet Id</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Place" name="eveid" value="{{$comment->event_id}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Proffesion</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="city" name="proff" value="{{$comment->proffession}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Comment Date</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="date" value="{{$comment->cmt_date}}">
                  </div>

                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="ADD" name="add">
                </div>
              </form>@endforeach
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
  