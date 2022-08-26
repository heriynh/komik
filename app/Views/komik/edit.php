<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
	<div class=container-fluid>
		<h1>EDIT KOMIK</h1>
		
		<form action="/komik/update/<?= $komik['id']; ?>" method="post">
		<?= csrf_field(); ?>
			<input type="hidden" value="<?= $komik['slug']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value= "<?= (old('judul')) ? old('judul') : $komik['judul'];?>"autofocus>
    	<div class="invalid-feedback">
    		<?=  $validation->getError(); ?>
    	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penulis" value="<?= (old('penulis')) ? old('judul') : $komik['penulis']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit"value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sampul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $komik['sampul']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
<?= $this->endSection(); ?>