<div class="table-responsive-md col-md-9 mb-5">
        	<table class="table" id="example">
				<thead>
					<tr>
						<th>NO</th>
						<th>Nama Penulis</th>
						<th>ID USER</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
               <tbody>
                    <?php
                        $NO = 0;
                        foreach ($listPenulis->result_array() as $b) {
                    ?>
                    <tr>
                        <td><?php echo $NO+1;?>.</td>
                        <td><?php echo $b['nama_penulis']; ?></td>
                        <td><?php echo $b['id_user']; ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#meditk"> EDIT</a>
                            &nbsp;
<!-- -->        
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/delete_cat/'.$b['id_penulis']);?>" > DELETE </a>
                        </td>
                    </tr>
                    <?php
                        $NO++;
                        }
                    ?>
                </tbody>
			</table>
		</div>

<div class="modal fade" id="meditk" tabindex="-1" role="dialog" aria-labelledby="test" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="test" style="color: white;">Edit Penulis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?php echo base_url('admin/editPenulis')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $b['id_penulis']; ?>">
                    <label class="form-group" style="color: white;"><b>Masukan Nama Penulis</b></label>
                   <input type="text" name="penulis" class="form-control" value="<?php echo $b['nama_penulis']; ?>" placeholder="Nama Kategori" required/><br/>                      
                    <label class="form-group" style="color: white;"><b>Masukan ID User</b></label>
                    <input type="text" name="username" class="form-control" value="<?php echo $b['id_user']; ?>" placeholder="Nama Kategori" required/><br/>               
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
      </div>
    </div>
  </div>
</div>