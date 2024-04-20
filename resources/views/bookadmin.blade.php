
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
            <h1 class="m-0">Daftar Buku</h1>
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
                           <h5 class="modal-title" id="exampleModalLabel">Tambahkan Buku</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                          <form action="{{route('bookadmin.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Cover Buku</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Penerbit</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" name="penerbit">
                           </div>

                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="kategori_id">
                              @foreach ($kategori as $kategori)
                              <option value="{{$kategori->id}}"> {{$kategori->nama_kategori}} </option>
                              @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">Stock</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="stock">
                         </div>

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Deksripsi</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" name="deskripsi">
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
                      <th>Judul</th>
                      <th>Penerbit</th>
                      <th>Kategori</th>
                      <th>Stock</th>
                      @can('Admin')
                      <th>Aksi</th>
                      @endcan
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $book)
                      <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{$book->judul}} </td>
                        <td> {{$book->penerbit}} </td>
                        <td> {{$book->kategori->nama_kategori}} </td>
                        <td> {{$book->stock}} </td>
                        @can('Admin')
                        <td >
                          {{-- lihat --}}
                          <a href="{{route('bookadmin.show', $book->id)}}" class="btn btn-warning btn-sm">Lihat<a>

                           {{-- edit --}}
                           <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$book->id}}">Edit</button>

                          {{-- hapus --}}
                          <form action="/bookadmin/{{$book->id}}" method="POST">
                            @csrf
                            @method('DELETE') 
                             <input type="text" value="{{$book->id}}" name="book_id" hidden>
                           <button type="submit" class="btn btn-danger btn-sm mr-2 ml-2">Hapus</button>
                          </form>

                           <!-- Modal edit -->
                           <div class="modal fade" id="edit{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content d-flex align-item-center">
                                <div class="modal-header">
                                  <h3 class="modal-title" id="exampleModalLabel">Tambah Buku</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ route('bookadmin.update', $book)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Judul</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="{{$book->judul}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Penerbit</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" name="penerbit" value="{{$book->penerbit}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Kategori</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" name="kategori" value="{{$book->kategori->nama_kategori}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Stock</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" name="stock" value="{{$book->stock}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Deskripsi</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" name="deskripsi" value="{{$book->deskripsi}}">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                  </form>
                                </div>
                                 
                              </div>
                            </div>
                          </div>
                          {{-- end edit modal --}}
                        </td>
                        @endcan
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Penerbit</th>
                      <th>kategori</th>
                      <th>Stock</th>
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
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
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
