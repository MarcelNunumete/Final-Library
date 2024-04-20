<style>
  .logo-img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* width: 100%; */
  }
</style>

@include('layout.header')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Perpus</b>40</a>
    </div>
    <div class="card-body">
      {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
      <img class="logo-img mb-2" src="{{asset('assets/img/logo40.png')}}" alt="" width="200">

      <form action="/login" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <button class="btn btn-block btn-primary">Sign in</button>
      </form>

      <p class="text-center mt-2">Belum memiliki akun? <a href="/register">sign up</a></p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
@include('layout.script')
</body>
</html>
