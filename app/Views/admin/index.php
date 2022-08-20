<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $id=1; ?>
  	<?php foreach($users as $user) : ?>
    <tr>
      <th scope="row"><?= $id++; ?></th>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>
      <td><?= $user->name; ?></td>
      <td>
			<a href="<?= base_url('admin/'. $user->userid); ?>" class="btn btn-info">DETAIL</a>
	</td>
    </tr>
    <?php endForeach; ?>
  </tbody>
</table>
                </div>
<?= $this->endSection(); ?>