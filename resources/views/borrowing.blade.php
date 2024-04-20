
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Peminjaman</h3>
                    <a href="/laporan-peminjaman" class="btn btn-primary">Download PDF</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Peminjam</th>
                          <th>Judul Buku</th>
                          <th>Tanggal pinjam</th>
                          <th>Tanggal kembali</th>
                          <th>Status</th>
                          @can('Admin')
                          <th>Aksi</th>
                          @endcan
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($borrowing as $data)                            
                          <tr>
                              <td> {{$loop->iteration}} </td>
                              <td> {{$data->nama_peminjam}} </td>
                              <td> {{$data->judul}} </td>
                              <td> {{$data->tanggal_pinjam}} </td>
                              <td> {{$data->tanggal_kembali}} </td>
                              <td> {{$data->status}} </td>
                              @can('Admin')
                              <td class="d-flex">

                                <form action="{{route('update-status', $data->id)}}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <input type="hidden" name="status" value="Diterima">
                                  <button type="submit" class="btn btn-success btn-sm mr-2">Terima</button>
                                </form>
                                
                                {{-- <form action="{{route("update-status", $data->id)}}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <input type="hidden" name="status" value="Ditolak">
                                  <button type="submit" class="btn btn-danger btn-sm mr-2">Tolak</button>
                                </form> --}}

                                <form action="{{route('update-status', $data->id)}}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <input type="hidden" name="status" value="Dikembalikan">
                                  <button type="submit" class="btn btn-warning btn-sm">Dikembalikan</button>
                                </form>
                                
                              </td>
                              @endcan
                          @endforeach
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama Peminjam</th>
                          <th>Judul Buku</th>
                          <th>Tanggal pinjam</th>
                          <th>Tanggal kembali</th>
                          <th>Status</th>
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
