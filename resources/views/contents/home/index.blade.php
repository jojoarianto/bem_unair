@extends('layouts.default')

@section('htmlheader_title')
    Pengajuan Proker
@endsection

@section('main-content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center" style="margin-top:180px">
          <h3 class="header center yellow-text text-lighten-2"><span class="header-custom">BEM UNIVERSITAS AIRLANGGA</span></h3>
          <h5 class="header col s12 light "><span class="header-custom">Semangat untuk Pembaruan Progresif!</span></h5>
        </div>
        <div class="row center">
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="http://unair.ac.id/uploads/module/slideshow/6e2ac2f50183c371d2701b3ca47b549c.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="white">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Pembukaan</h4>
            <p class="center-align light">Lorem ipsum dolor sit amet, consectetur adipiscing justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper <br>Rizky Abdillah, Presiden BEM Unair 2016</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="background-color: #EDEDED">
    <div class="container " >
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Kementerian Kabinet SUPER!</h4>
            <br>
            <div class="row">
              <div class="col s3 offset-s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/aceee.png" alt="Uploaded image">
                <p>Rizky Abdillah</p>
              </div>
              <div class="col s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/har.png" alt="Uploaded image">
                <p>IHWANUN M HARIRI</p>
              </div>
            </div>
            <div class="row">
              <div class="col s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/aceee.png" alt="Uploaded image">
                <p>Rizky Abdillah</p>
              </div>
              <div class="col s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/aceee.png" alt="Uploaded image">
                <p>Rizky Abdillah</p>
              </div>
              <div class="col s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/aceee.png" alt="Uploaded image">
                <p>Rizky Abdillah</p>
              </div>
              <div class="col s3">
                <img width="150px" src="http://bem.unair.ac.id/wp-content/uploads/2015/10/aceee.png" alt="Uploaded image">
                <p>Rizky Abdillah</p>
              </div>
            </div>
            <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Tentang Kabinet Super</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="white">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Part of </h4>
            <img src="http://res.cloudinary.com/timdonat/image/upload/c_scale,w_391/v1460662908/header-coba-1_wmdlzk.png" alt="">
            <img src="http://res.cloudinary.com/timdonat/image/upload/c_scale,w_391/v1460662908/header-coba-1_wmdlzk.png" alt="">
            <img src="http://res.cloudinary.com/timdonat/image/upload/c_scale,w_391/v1460662908/header-coba-1_wmdlzk.png" alt="">
            <img src="http://res.cloudinary.com/timdonat/image/upload/c_scale,w_391/v1460662908/header-coba-1_wmdlzk.png" alt="">
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <hr>
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Kirim Aspirasi</h4>
            <p class="center-align light">Kami siap mendengarkan segala aspirasimu! :) <br> Kirim dan sampaikan aspirasimu dalam form berikut :</p>
            <div class="row">
              <form class="col s8 offset-s2">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nama Lengkap</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Aspirasi</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
