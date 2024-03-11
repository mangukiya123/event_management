@include('staff_header');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orgmnaioze Team Information</h1>
          </div>
          <div class="col-sm-6">
            
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
                <h3 class="card-title">About Org_Team</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>org_team_name</th>
                      <th>org_team_email</th>
                      <th>org_team_about</th>
                      <th>image_name</th>
                      <th>org_team_contact</th>
                      <th>org_team_city</th> 
                      <th>Delete</th>
                      <th></th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($org_team_details as $num){ ?>
                      <td>{{$num->id}}</td>
                      <td>{{$num->org_team_name}}</td>
                      <td>{{$num->org_team_email}}</td>
                      <td>{{$num->org_team_about}}</td>
                      <td><img src="{{asset('org_images/'.$num->org_team_images)}}" height="100px" width="100px"></td>
                      <td>{{$num->org_team_contact}}</td>
                      <td>{{$num->org_team_city}}</td>
                      <td><a href="delete_org_team/{{$num->id}}"><ion-icon name='trash-outline'></ion-icon><a><td>
                      <td><a href="update_org_team/{{$num->id}}"><ion-icon name='create-outline'></ion-icon></a><td>
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