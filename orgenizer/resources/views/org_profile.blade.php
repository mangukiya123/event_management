@include('header');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>My Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img src="images/{{Session::get('image')}}" alt="User Image" style="height:150px; width=100px;">
                </div>

                <h3 class="profile-username text-center"><p class="d-block">{{ Session::get('login_name')}}</p></h3>

                <p class="text-muted text-center">Website Development</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;
                    <b>E-MAIL</b><a class="float-right">hemashighoghari20@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                  <i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;
                    <b>CONTACT</b><p class="float-right">91+ 70966 72573</p>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.C.A in Computer Application from the University of VNSGU(Veer Nurmad South Gujarat University)
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Surat , Gujrat</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Website Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Laravel</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer');