		<div class="col-md-9">
			<form action="<?php echo base_url('admin/proc_insertPenulis')?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-group" style="color: white;"><b>Masukan Nama Penulis</b></label>
	            	<input type="text" name="penulis" class="form-control" placeholder="Nama Kategori" required/><br/>					
				</div>

				<div class="form-group">
					<label class="form-group" style="color: white;"><b>Masukan Nama ID Username</b></label>
	            	<input type="text" name="username" class="form-control" placeholder="ID Username" required/><br/>					
				</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
            </form>
		</div>