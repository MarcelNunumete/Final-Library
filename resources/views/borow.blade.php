
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
            <h1 class="m-0">Dashboard</h1>
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
        <div class="col-md-12">
            <div class="card">
              <div class="card-body"> 
                <div class="row">
                  @foreach ($book as $item)
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card">
                      <img src="{{asset ('storage/'. $item->image)}}" alt="">
                      <h4>{{$item->judul}}</h4>
                      @can('admin-pustakawan', ['Admin', 'Pustakawan'])
                      <div class="card-body">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                          Pinjam
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content d-flex align-item-center">
                              <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Konfirmasi Peminjaman</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('borrow.store', $item->id)}}" method="POST">
                                  @csrf
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Peminjam</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_peminjam">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul buku</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
                                  </div>
                                  <button class="btn btn-primary" type="submit">Konfirmasi</button>
                                </form>
                              </div>
                               
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-outline-primary">Lihat</button>
                      </div>
                      @endcan
                    </div>
                  </div>
                  @endforeach
                </div>
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
