@include('header');

  <!-- Content Wrapper. Contains page content -->
  @CSRF
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Here, Information About Event</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"></div> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>   
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Event Date</th>
                      <th>Event Time</th>
                      <th>Images</th>
                      <th>Event Start Date Booking</th>
                      <th>Event Details</th>
                      <th>Event Orgnize Team name</th>
                      <th>Event Price</th>
                      <th>Event Place</th>
                      <th>Event City</th>
                      <th>Event Address</th>
                      <th>Event Speacker Name</th>
                      <th>DELETE</th>
                      <th></th> 
                      <th>UPDATE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($event_details as $num){ ?>
                      <td>{{$num->id}}</td>
                      <td>{{$num->event_date}}</td>
                      <td>{{$num->event_time}}</td>
                      <td><img src="{{asset('event_images/'.$num->event_image)}}" height="100px" width="100px"></td>
                      <td>{{$num->event_start_date_booking}}</td>
                      <td>{{$num->event_detail}}</td>
                      <td>{{$num->event_organize_team_name}}</td>
                      <td>{{$num->event_price}}</td>
                      <td>{{$num->event_place}}</td>
                      <td>{{$num->event_city}}</td>
                      <td>{{$num->event_address}}</td>
                      <td>{{$num->event_date}}</td>
                      <td><a href="delete_event/{{$num->id}}"><ion-icon name='trash-outline'></ion-icon><a><td>
                      <td><a href="update_event/{{$num->id}}"><ion-icon name='create-outline'></ion-icon></a><td>
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