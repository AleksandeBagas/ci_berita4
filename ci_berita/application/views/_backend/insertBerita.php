		<div class="col-md-9">
			<form action="<?php echo base_url('admin/proc_insertBerita')?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-group" style="color: white;"><b>Masukan Judul Berita</b></label>
	            	<input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>					
				</div>

				<div class="form-group">
					<label class="form-group" style="color: white;"><b>Masukan Isi Berita</b></label>
					<textarea id="ckeditor" name="berita" class="form-control" required></textarea>	
				</div>
				
				<label class="form-group" style="color: white;"><b>Masukan Kategori Berita</b></label>
				<div>
                <select class= "form-control" name="kategori">
                    <?php foreach ($listKategori->result_array() as $cat) {
                    ;?>
                    <option value="<?php echo $cat['cat_id'];?>" selected><?php echo $cat['name'];?></option>
                    <?php } ;?>                                      
				</select>


			<?php  if($group->id =="1" )
            {
              ?>
				<label class="form-group"><b>Masukan Penulis Berita</b></label>
                <select class= "form-control" name="penulis">
                    <?php foreach ($listPenulis->result_array() as $p) {
                    ;?>
                    <option value="<?php echo $p['id_penulis'];?>" selected><?php echo $p['nama_penulis'];?></option>
                    <?php } ;?>                                      
				</select>
			<?php } else {?>
				    <input type="text" name="penulis" hidden value="">
				    <select class= "form-control" name="penulis">
                    <?php foreach ($listPenulis->result_array() as $p) {
                    ;?>
                    <option value="<?php echo $p['id_penulis'];?>" selected><?php echo $p['nama_penulis'];?></option>
                    <?php } ;?>                                      
				</select>
			<?php } ?>

				</div>
				<div class="form-group">
					<label class="form-group" style="color: white;"><b>Masukan Foto Berita</b></label><br>
					<input type="file" name="filefoto">					
				</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
            </form>
		</div>