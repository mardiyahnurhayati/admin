<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						
						<li><a href="<?php echo base_url('Admin/tampil_guru')?>" class="active"><i class="lnr lnr-dice"></i> <span>Data Alternatif</span></a></li>
						
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Alternatif</h3>
								</div>
								<div class="panel-body">
            						<div class="text-right"><a  href="<?php echo base_url()."Admin/tambah_alternatif";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            						<br>
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama Alternatif</th>
												<th>Keaktifan Study Club</th>
												<th>Pengembangan Kompetensi</th>
												<th>Pengalaman Organisasi</th>
												<th>Kepopuleran</th>
												<th><center>Aksi</center></th>
											</tr>
										</thead>
									
										<tbody>
											<tr>

												<?php 
												$no = 1;
												foreach ($alternatif as $a) {?>
													
												<td><?php echo $no++;?></td>
												<td><?php echo $a->nama_alternatif;?></td>
												<td><?php echo $a->keaktifan;?></td>
												<td><?php echo $a->pengembangan_kompetensi;?></td>
												<td><?php echo $a->pengalaman_organisasi;?></td>
												<td><?php echo $a->kepopuleran;?></td>
												<td><center>
													<a href="<?php echo base_url()."Admin/hapus_alternatif/".$a->id_alternatif; ?>" class="btn-xs btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                									<a href="<?php echo base_url()."Admin/edit_alternatif/".$a->id_alternatif; ?>" class="btn-xs btn-warning"n><i class="fa fa-pencil" aria-hidden="true"></i></a>
												</center></td>
												
											</tr>
											<?php }?>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
						
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>