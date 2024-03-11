@include('header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD EVENT</h1>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($update_data as $comments)
              <form method="post" enctype="multipart/form-data">
              @CSRF
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Event name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name" value="{{$comments->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Event_date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Date" name="date" value="{{$comments->event_date}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Time</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Time" name="time" value="{{$comments->event_time}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Details</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="SubTitle" name="details" value="{{$comments->event_details}}">
                  </div>
                  <div class="form-group"> 
                    <label for="exampleInputPassword1">Event Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Price" name="price" value="{{$comments->event_price}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Place</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Place" name="place" value="{{$comments->event_place}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="city" name="city" value="{{$comments->event_city}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="address" value="{{$comments->event_address}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Start Date Booking</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="bookin date" name="datebokking" value="{{$comments->start_date_booking}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Organization Team Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="team name" name="teamname" value="{{$comments->event_organization_team_nme}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Speaker Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="speaker name" name="speakername" value="{{$comments->event_speaker_nae}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Max Seats</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="speaker name" name="seats" value="{{$comments->max_seats}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{$comments->image}}">
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
              @endforeach
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
  