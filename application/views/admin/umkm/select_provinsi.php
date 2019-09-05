<option disabled selected hidden> Pilih Provinsi</option>
<?php foreach ($provinsi as $key) { ?>
<option value="<?php  echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
<?php }  ?>