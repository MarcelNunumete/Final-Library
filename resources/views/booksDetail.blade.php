
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
        <div class="row">

            <div class="col-md-3">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <img src="{{asset('storage/'. $book->image)}}" alt="" width="220">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6>Detail Buku</h6>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr class="d-flex gap-4">
                                <td class="fw-medium">Judul : </td>
                                <td>{{$book->judul}}</td>
                              </tr>
                            <tr class="d-flex gap-4">
                                <td class="fw-medium">Penerbit : </td>
                                <td>{{$book->penerbit}}</td>
                              </tr>
                            <tr class="d-flex gap-4">
                                <td class="fw-medium">Kategori : </td>
                                <td>{{$book->kategori->nama_kategori}}</td>
                              </tr>
                            <tr class="d-flex gap-4">
                                <td class="fw-medium">Stock : </td>
                                <td>{{$book->stock}}</td>
                              </tr>
                            <tr class="d-flex gap-4">
                                <td class="fw-medium">Deskripsi : </td>
                                <td>{{$book->deskripsi}}</td>
                              </tr>
                        </table>
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
