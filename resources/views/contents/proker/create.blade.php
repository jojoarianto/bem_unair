@extends('layouts.default')

@section('htmlheader_title')
Pengajuan Proker
@endsection

@section('main-content')
<div class="white">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Pengajuan Proker</h4>
          <p class="center-align light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, incidunt, animi? Molestias enim illo officiis molestiae autem iusto aut quidem similique ea dolores suscipit, modi officia rem! Cupiditate, nobis, id.<br>Formulir pengajuan proker - SESKAB</p>

          <div class="row">
            <form class="col s8 offset-s2">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Nama Lengkap (PIC)</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Nomor HP</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">ID line</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Pilih Kementerian</option>
                      <option value="1">Kementerian Penelitian dan Pengembangan</option>
                      <option value="2">Kementerian Akademik Prestasi</option>
                      <option value="3">Kementerian Sumber Daya Mahasiswa</option>
                    </select>
                    <!-- <label>Pilih Kementerian</label> -->
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Nama Proker atau Kegiatan</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Deskripsi Kegiatan</label>
                </div>
              </div>
              <div class="row">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" multiple>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload proposal">
                  </div>
                </div>
              </div>

              <div class="container center">
                <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Kirim Pengajuan</a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script_footer')
<script>  
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
@endsection
