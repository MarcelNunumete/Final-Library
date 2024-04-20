
@include('layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layout.preloader')


  @include('layout.navbar')

  @include('layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="assets/img/user4-128x128.jpg"
                         alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center"> {{ auth()->user()->full_name }} </h3>
  
                  <p class="text-muted text-center"> {{auth()->user()->role}} </p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                  </ul>
  
                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- About Me Box -->
              
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Update Profile</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
  
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" value=" {{auth()->user()->full_name}} ">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{auth()->user()->username}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name" value="{{auth()->user()->email}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Role</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="{{auth()->user()->role}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layout.script')
</body>
</html>
