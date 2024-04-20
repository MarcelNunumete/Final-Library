@include('layout.header')
<style>
  body{
    background-image: url("assets/img/bg-welcome.jpg");
    background-position: center;
    background-size: cover;
  }
  #landing-page{
    position: relative;
    top: 100px
  }

  .search {
  flex: 0 0 90%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.search__input {
  font-family: "Open Sans", sans-serif;
  font-size: 17px;
  color: #333333;
  background-color: #f4f2f2;
  border: none;
  padding: 14px 72px 14px 42px;
  border-radius: 10px;
  width: 40%;
  margin-left: -34px;
  margin-right: -66px;
  transition: all 0.2s;
}

.search__input:focus {
  outline: none;
  width: 50%;
  background-color: #f0eeee;
}

.search__input::-webkit-input-placeholder {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: 500;
  color: #999999;
}

.search__button {
  border: none;
  background-color: transparent;
  z-index: 999;
  cursor: pointer;
}

.search__button:focus {
  outline: none;
}

.search__button:active {
  transform: translateY(2px);
}

.search__icon {
  height: 20px;
  width: 20px;
  fill: #999999;
  position: relative;
  bottom: 5px;
}

.mic__button {
  border: none;
  background-color: transparent;
  margin-right: 10px;
  cursor: pointer;
}

.mic__button:focus {
  outline: none;
}

.mic__button:active {
  transform: translateY(2px);
}

.mic__icon {
  height: 28px;
  width: 20px;
  fill: #999999;
}

.mic__icon:hover {
  fill: #dd5e89;
}

.picture__button {
  border: none;
  background-color: transparent;
  cursor: pointer;
}

.picture__button:focus {
  outline: none;
}

.picture__button:active {
  transform: translateY(2px);
}

.picture__icon {
  height: 16px;
  width: 20px;
  fill: #999999;
}

.picture__icon:hover {
  fill: #dd5e89;
}

.title{
  color: #ffffff;
}
.text-body p{
  color: #ffffff
}

.navbar-brand{
  font-weight: 400;
}

.btn{
  display: flex;
  justify-content: center;
  margin-right: 5px;
  margin-left: 5px;
}

</style>
<body>

<nav class="navbar navbar-light bg-transparent">
  <div class="container">
    <a class="navbar-brand" href="#" style="color:#ffffff; font-weight:bold">
      <img src="assets/img/logo40.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Perpustakaan 40
    </a>
    <button class="btn btn-primary">Sign In</button>
  </div>
</nav>

<section id="landing-page">
  <div class="title text-center">
    <h1>Selamat datang di <br> perpustakaan SMKN 40 Jakarta</h1>
  </div>
  <div class="text-body text-center">
    <p>"Temukan kekayaan literasi di Perpustakaan Digital kami. 
      Akses ribuan buku digital terbaru, pelajari topik terkini, <br>
       dan jadilah bagian dari komunitas pembelajar yang 
      penuh inspirasi. Mulailah petualangan literasi Anda hari ini!"</p>
  </div>
  <form action="#" class="search">
    <button class="search__button">
      <div class="search__icon">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
          <title>magnifying-glass</title>
          <path d="M17.545 15.467l-3.779-3.779c0.57-0.935 0.898-2.035 0.898-3.21 0-3.417-2.961-6.377-6.378-6.377s-6.186 2.769-6.186 6.186c0 3.416 2.961 6.377 6.377 6.377 1.137 0 2.2-0.309 3.115-0.844l3.799 3.801c0.372 0.371 0.975 0.371 1.346 0l0.943-0.943c0.371-0.371 0.236-0.84-0.135-1.211zM4.004 8.287c0-2.366 1.917-4.283 4.282-4.283s4.474 2.107 4.474 4.474c0 2.365-1.918 4.283-4.283 4.283s-4.473-2.109-4.473-4.474z"></path>
        </svg>
      </div>
    </button>
    <input type="text" class="search__input" placeholder="Search...">
    <button class="mic__button">
      <div class="mic__icon">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 83.44 122.88" style="enable-background: new 0 0 83.44 122.88" xml:space="preserve">
          <g>
            <path d="M45.04,95.45v24.11c0,1.83-1.49,3.32-3.32,3.32c-1.83,0-3.32-1.49-3.32-3.32V95.45c-10.16-0.81-19.32-5.3-26.14-12.12 C4.69,75.77,0,65.34,0,53.87c0-1.83,1.49-3.32,3.32-3.32s3.32,1.49,3.32,3.32c0,9.64,3.95,18.41,10.31,24.77 c6.36,6.36,15.13,10.31,24.77,10.31h0c9.64,0,18.41-3.95,24.77-10.31c6.36-6.36,10.31-15.13,10.31-24.77 c0-1.83,1.49-3.32,3.32-3.32s3.32,1.49,3.32,3.32c0,11.48-4.69,21.91-12.25,29.47C64.36,90.16,55.2,94.64,45.04,95.45L45.04,95.45z M41.94,0c6.38,0,12.18,2.61,16.38,6.81c4.2,4.2,6.81,10,6.81,16.38v30c0,6.38-2.61,12.18-6.81,16.38c-4.2,4.2-10,6.81-16.38,6.81 s-12.18-2.61-16.38-6.81c-4.2-4.2-6.81-10-6.81-16.38v-30c0-6.38,2.61-12.18,6.81-16.38C29.76,2.61,35.56,0,41.94,0L41.94,0z M53.62,11.51c-3-3-7.14-4.86-11.68-4.86c-4.55,0-8.68,1.86-11.68,4.86c-3,3-4.86,7.14-4.86,11.68v30c0,4.55,1.86,8.68,4.86,11.68 c3,3,7.14,4.86,11.68,4.86c4.55,0,8.68-1.86,11.68-4.86c3-3,4.86-7.14,4.86-11.68v-30C58.49,18.64,56.62,14.51,53.62,11.51 L53.62,11.51z"></path>
          </g>
        </svg>
      </div>
    </button>
  </form>
  <div class="btn text-center mt-2">
    <a href="/login" class="btn btn-primary">Sign In</a>
    <a href="/" class="btn btn-outline-primary">Lihat Buku</a>
  </div>
</section>

</body>

@include('layout.script')
</html>