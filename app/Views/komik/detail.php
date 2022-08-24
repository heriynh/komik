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
		<a href="" class="btn btn-warning">Edit</a>
		<a href="/komik/delete/<?= $komik['id']; ?>" class="btn btn-danger">Hapus</a>
		</br>
		<a href="/komik">&laquo; Kembali ke halaman detail</a>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>