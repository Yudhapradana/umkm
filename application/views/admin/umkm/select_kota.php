<option disabled selected hidden class="nomor-not"> Pilih Kota/Kabupaten</option>
<?php foreach ($kota as $key) { ?>
	<option value="<?php echo $key->nama ?>" class="nomor-nor-<?php echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
	<?php }  ?>