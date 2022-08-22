<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
	<div class=container-fluid>
		<h1>KOMIK</h1>
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
    <tr>
      <th scope="row">1</th>
      <td><img src="img/Naruto.jpg" class="sampul" alt=""></td>
      <td>Naruto</td>
      <td>
			<a href="<?= base_url('komik/detail'); ?>" class="btn btn-info" > Detail </a>
	</td>
    </tr>
 </tbody>
</table>
</div>
<?= $this->endSection(); ?>