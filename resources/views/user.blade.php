
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
            <h1 class="m-0">Daftar Pengguna</h1>
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data pengguna</h3>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                        Tambah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah pengguna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('user.store')}}" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="role">
                                      <option selected>Pilih Role</option>
                                      <option value="Pustakawan">Pustakawan</option>
                                      <option value="Member">Member</option>
                                      <option value="Admin">Admin</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                            </div>
                        </div>
                        </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Nama Pengguna</th>
                          <th>Email</th>
                          <th>Role</th>
                          @can('Admin')
                          <th>Aksi</th>
                          @endcan
                        </tr>
                        </thead>
                        <tbody>  
                            @foreach ($user as $data)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$data->full_name}} </td>
                                <td> {{$data->username}} </td>
                                <td> {{$data->email}} </td>
                                <td> {{$data->role}} </td>
                                @can('Admin')
                                <td class="d-flex">
                                  <button type="button" class="btn btn-warning btn-sm mr-2" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
                                  <form action="{{route('user.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                  </form>
                                  <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('user.update', $data->id)}}" method="POST">
                                                @csrf
                                                @method('patch')
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" value="{{$data->full_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nama Pengguna</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="username" value="{{$data->username}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Email</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Password</label>
                                                <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="{{$data->password}}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01" name="role" value="{{$data->role}}">
                                                  <option selected>Pilih Role</option>
                                                  <option value="Pustakawan">Pustakawan</option>
                                                  <option value="Member">Member</option>
                                                  <option value="Admin">Admin</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </td>
                                @endcan
                              </tr>
                            @endforeach                         
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Nama Pengguna</th>
                          <th>Email</th>
                          <th>Role</th>
                          @can('Admin')
                          <th>Aksi</th>
                          @endcan
                        </tr>
                        </tfoot>
                      </table>
                </div>
            </div>
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
