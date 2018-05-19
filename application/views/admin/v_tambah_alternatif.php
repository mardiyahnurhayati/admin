<div class="col-md-2">
  <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            
            <li><a href="<?php echo base_url('Admin')?>" class="active"><i class="lnr lnr-dice"></i> <span>Data Alternatif</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
    <div class="col-md-10 ">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Alternatif</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Edit Data Alternatif</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url()."Admin/tambah_aksi_alternatif"; ?>">

          <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="nisn" class="form-control" id="id" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama Alternatif</label>
            <div class="col-sm-10">
              <input type="text"  name="nama_alternatif" class="form-control" id="nama_alternatif" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text"  name="deskripsi" class="form-control" id="deskripsi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="keaktifan" class="col-sm-2 col-form-label">Keaktifan</label>
            <div class="col-sm-10">
              <input type="text"  name="keaktifan" class="form-control" id="keaktifan" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="pengembangan_kompetensi" class="col-sm-2 col-form-label">Pengembangan Kompetensi</label>
            <div class="col-sm-10">
              <input type="text"  name="pengembangan_kompetensi" class="form-control" id="pengembangan_kompetensi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="pengalaman_organisasi" class="col-sm-2 col-form-label">Pengalaman Organisasi</label>
            <div class="col-sm-10">
              <input type="text"  name="pengalaman_organisasi" class="form-control" id="pengalaman_organisasi" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kepopuleran" class="col-sm-2 col-form-label">Kepopuleran</label>
            <div class="col-sm-10">
              <input type="text"  name="kepopuleran" class="form-control" id="kepopuleran" placeholder="" required="">
            </div>
          </div>

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
 