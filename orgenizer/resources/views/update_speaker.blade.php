@include('staff_header');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Speakers</h1>
          </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Speakers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($update_data as $add_speaker_query)
              <form  method="post" enctype="multipart/form-data">
               @CSRF
                <div class="card-body">
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Name" name="speaker_name" value="{{$add_speaker_query->speaker_name}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Email" name="speaker_email" value="{{$add_speaker_query->speaker_email}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-image"></i></span>
                    </div>
                    <input type="file" class="form-control" placeholder="Enter Speaker Image" name="speaker_image" value="{{$add_speaker_query->speaker_image}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Enter Speaker Contact" name="speaker_contact" value="{{$add_speaker_query->speaker_contact}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Date" name="speaker_date" value="{{$add_speaker_query->speaker_date}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Time" name="speaker_time" value="{{$add_speaker_query->speaker_time}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-date"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Time" name="experience" value="{{$add_speaker_query->experience}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-city"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker City" name="speaker_city" value="{{$add_speaker_query->speaker_city}}">
                  </div>
                  <div class="input-group col-sm-10 mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Speaker Information" name="speaker_info" value="{{$add_speaker_query->speaker_info}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-info" value="Create"  name="add_speaker">
                </div>
                <!-- /.card-footer -->
              </form>
              @endforeach
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@include('footer');