<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Helpdesk</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Helpdesk</li>
        </ol>
      </div>
    </div>



    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="<?php echo base_url(). 'helpdesk/simpan'; ?>" method="post">>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="nama" id="inputEmail3" placeholder="Input Your name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Agency</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="instansi" id="inputPassword3" placeholder="Input Your Agency">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <label class="col-form-label col-sm-2 pt-0">Pilih Laporan</label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Menara Suar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Rambu suar
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Pelampung Suar
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1"></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>

</div>
