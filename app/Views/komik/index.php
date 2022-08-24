<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
	<div class=container-fluid>
		<a href="/komik/create" class="btn btn-success">Tambah Data</a>
		<h1>KOMIK</h1>
		<?php if(session()->getFlashdata('pesan')) : ?>
			<div class="alert alert-success">
				<?= session()->getFlashdata('pesan'); ?>
			</div>
		<?php endif; ?>
	<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($komik as $k) : ?>
    <tr>
      <th scope="row">1</th>
      <td><img src="/img/<?= $k['sampul']; ?>" class="sampul" alt=""></td>
      <td><?= $k['judul']; ?></td>
      <td>
			<a href="<?= base_url('komik/detail/'.  $k['slug']); ?>" class="btn btn-info" > Detail </a>
	</td>
    </tr>
    <?php endforeach; ?>
 </tbody>
</table>
</div>
<?= $this->endSection(); ?>