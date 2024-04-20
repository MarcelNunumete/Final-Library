
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
                <h3 class="card-title">Data Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- Button trigger modal -->
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary mb-2  " data-toggle="modal" data-target="#exampleModal">
                   Tambah +
                 </button>

                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambahkan Kategori</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        <form action="{{route('kategori.store')}}" method="POST">
                            @csrf
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Nama Kategori</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kategori">
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
                    <th>Nama Kategori</th>
                    @can('Admin')
                    <th>Aksi</th>
                    @endcan
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($kategori as $kategori)
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{$kategori->nama_kategori}} </td>
                        @can('Admin')
                        <td class="d-flex">
                          <button type="button" class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#edit{{$kategori->id}}">Edit</button>
                          
                          <form action="/kategori/{{$kategori->id}}" method="POST">
                            @csrf
                            @method('delete')
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                          </form>

                          {{-- modal edit --}}
                          <div class="modal fade" id="edit{{$kategori->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambahkan Kategori</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                 <form action="{{route('kategori.update', $kategori)}}" method="POST">
                                     @csrf
                                     @method('PATCH')
                                   <div class="form-group">
                                       <label for="exampleFormControlInput1">Nama Kategori</label>
                                       <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kategori" value="{{$kategori->nama_kategori}}">
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
                        </td>
                        @endcan
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    @can('Admin')
                    <th>Aksi</th>
                    @endcan
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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
