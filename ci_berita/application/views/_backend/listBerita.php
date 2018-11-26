        
<div class="table-responsive-md col-md-9 mb-5">
        	<table class="table" id="example">
				<thead>
					<tr>
						<th>NO</th>
						<th>Judul Berita</th>
						<th>Kategori Berita</th>
						<th>Isi Berita</th>
                        <th>Penulis</th>
						<th>Action</th>
					</tr>
				</thead>
               <tbody>
                    <?php
                        $NO = 0;
                        foreach ($listBerita->result_array() as $b) {
                    ?>
                    <tr>
                        <td><?php echo $NO+1;?>.</td>
                        <td><?php echo substr($b['berita_judul'],0,20); ?></td>
                        <td><?php echo $b['name']; ?></td>
                        <td><?php echo substr($b['berita_isi'],0,20); ?></td>
                        <td><?php echo $b['nama_penulis']; ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('admin/editBerita/'.$b['berita_id']);?>" > EDIT</a>
                            &nbsp;
<!-- -->        
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/delete_berita/'.$b['berita_id']);?>" > DELETE </a>
                        </td>

                    </tr>
                    <?php
                        $NO++;
                        }
                    ?>
                </tbody>
			</table>

		</div>

