<div class="container">
								<h3 class="header smaller lighter blue">Status pengumuman saat ini : <b><?php echo $pengumuman->status;;?><b/></h3>
								<a href="<?php echo site_url('admin/hidupkanpengumuman');?>"><button class="btn btn-large btn-primary"><strong>HIDUPKAN</strong></button></a>
								<br/><br/><br/>
								<a href="<?php echo site_url('admin/matikanpengumuman');?>"><button class="btn btn-large btn-danger"><strong>MATIKAN</strong></button></a>




<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	 <?= form_open_multipart('admin/update_pengumuman', ['class'=>'form-horizontal']) ?>
  <textarea name='isi'>
  	<?php echo $pengumuman->isi; ?>


  </textarea>
  <input type='hidden'  name='id' value="<?php echo $pengumuman->id; ?> ">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>
</form>

</body>
</html>
	</div>