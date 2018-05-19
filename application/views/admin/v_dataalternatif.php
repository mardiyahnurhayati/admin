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
            						<div class="text-right"><a  href="<?php echo base_url()."Admin/tambah_guru";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            						<br>
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama Alternatif</th>
												<th>Kriteria</th>
												<th>Nilai</th>
												<th><center>Aksi</center></th>
											</tr>
										</thead>
									
										<tbody>
											<tr>

												<?php 
												$no = 1;
												foreach ($alternatif as $a) {?>
													
												<td><?php echo $no++;?></td>
												<td><?php echo $a->alternatif;?></td>
												<td><?php echo $a->kriteria;?></td>
												<td><?php echo $a->rangking;?></td>
												
												<td><center>
													<a href="<?php echo base_url()."Admin/delete_alternatif/".$a->id_alternatif."/".$a->id_kriteria; ?>" class="btn-xs btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                									<a href="<?php echo base_url()."Admin/edit_alter/".$a->id_alternatif."/".$a->id_kriteria; ?>" class="btn-xs btn-warning"n><i class="fa fa-pencil" aria-hidden="true"></i></a>
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