<div class="col-md-2">
  <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            
            <li><a href="<?php echo base_url('Admin/tampil_alternatif')?>" class="active"><i class="lnr lnr-dice"></i> <span>Data Alternatif</span></a></li>
            
            
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

            <form method="post" action="<?php echo base_url()."Admin/edit_aksi_alternatif"; ?>">

          <div class="form-group row">
            <label for="alternatif" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="alternatif" class="form-control" id="alternatif" value="<?php echo $id_alternatif;?>" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kriteria" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="hidden"  name="kriteria" class="form-control" value="<?php echo $id_kriteria;?>" id="kriteria" placeholder="" required="">
            </div>
          </div>
          <div class="form-group row">
            <label for="Keaktifan" class="col-sm-2 col-form-label">Nilai</label>
            <div class="col-sm-10">
              <input list="list_nilai" type="text"  name="nilai" value="<?php echo $nilai_rangking;?>" class="form-control" id="nilai" placeholder="" required="">
              <datalist id="list_nilai">
                <?php foreach ($data as $value) {?>
                  
                
                  <option value="<?=$value['jum_nilai']?>"><?=$value['ket_nilai']?></option><?php } ?>
                </datalist>
            </div>
          </div>

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
 