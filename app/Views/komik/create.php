<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
	<div class=container-fluid>
		<h1>CREATE KOMIK</h1>
		
		<form action="/komik/save" method="post">
		<?= csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value= "<?= old('judul');?>"autofocus>
    	<div class="invalid-feedback">
    		<?=  $validation->getError(); ?>
    	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penulis">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sampul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sampul">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?= $this->endSection(); ?>