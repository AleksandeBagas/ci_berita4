		<div class="col-md-9">
			

			<form action="<?php echo base_url('admin/proc_editBerita');?>" method="POST" enctype="multipart/form-data">
				<?php
                    foreach ($data->result_array() as $d) :
                ?>
                <input class="form-control" type="hidden" name="txt_id" value="<?php echo $d['berita_id']; ?>" />              
				<div class="form-group">
					<label class="form-group"><b>Masukan Judul Berita</b></label>
	            	<input type="text" name="judul" class="form-control" value="<?php echo $d['berita_judul']; ?>" placeholder="Judul berita" required/><br/>					
				</div>

				<div class="form-group">
					<label class="form-group"><b>Masukan Isi Berita</b></label>
					<textarea id="ckeditor" name="berita" class="form-control" required><?php echo $d['berita_isi'];?></textarea>	
				</div>



                <label class="form-group"><b>Masukan Penulis Berita</b></label>
                <div>
                    <select class= "form-control" name="penulis">
                    <option value="1"
                    <?php if($d['id_penulis']=='1')
                            {
                                echo "selected";
                            }
                     ?>>Vicky</option>


                    <option value="2"
                    <?php if ($d['id_penulis']=='2')
                            {
                                echo "selected";
                            }
                     ?>>Surya</option>
                    </option>

                    <option value="3"
                    <?php if ($d['id_penulis']=='3')
                            {
                                echo "selected";
                            }
                     ?>>Bagas</option>

                    <option value="4"
                    <?php if ($d['id_penulis']=='4')
                            {
                                echo "selected";
                            }
                     ?>>Chandra</option>               
                    </select>
                </div>



			
				<label class="form-group"><b>Masukan Kategori Berita</b></label>
				<div>
					<select class= "form-control" name="kategori">
                    <option value="1"
                    <?php if($d['cat_id']=='1')
                            {
                    			echo "selected";
                    		}
                     ?>>Ekonomi</option>


                    <option value="2"
                    <?php if ($d['cat_id']=='2')
                    		{
                    			echo "selected";
                    		}
                     ?>>Hiburan</option>
                    </option>

                    <option value="3"
                    <?php if ($d['cat_id']=='3')
                    		{
                    			echo "selected";
                    		}
                     ?>>Hukum</option>

                    <option value="4"
                    <?php if ($d['cat_id']=='4')
                    		{
                    			echo "selected";
                    		}
                     ?>>Olahraga</option>


                     <option value="5"
                    <?php if ($d['cat_id']=='5')
                    		{
                    			echo "selected";
                    		}
                     ?>>Politik</option>                                        
				    </select>
				</div>

				<div class="form-group">
					<label class="form-group"><b>Masukan Foto Berita</b></label><br>
                    <img class="form-control" src="<?php echo base_url().'assets/images/upload/'.$d['berita_image'];?>" style="width: 100px; height: 100px;">
                    <input class="form-control" type="hidden" name="txt_gmb" value="<?php echo $d['berita_image']; ?>" />
					<input type="file" name="filefoto">					
				</div>



		      <div class="modal-footer">
               <a class="btn btn-secondary" href="<?php echo base_url('admin'); ?>"> Batal</a>
		       <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
		      </div>
		      <?php endforeach ?>
            </form>
       	</div>
