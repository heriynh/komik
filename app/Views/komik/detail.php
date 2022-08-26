<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
	<div class=container-fluid>
		<h1>DETAIL KOMIK</h1>
	<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik['judul']; ?></h5>
        <p class="card-text"><b> Penulis: </b><?= $komik['penulis']; ?></p>
        <p class="card-text"><b> Penerbit: </b><?= $komik['penerbit']; ?></p>
		<a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
		<form action="/komik/delete/<?= $komik['id']; ?>" method="post" class="d-inline">
			<?= csrf_field(); ?>
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</button>
		</form>
		
		
		<br>
		<a href="/komik">&laquo; Kembali ke halaman detail</a>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>