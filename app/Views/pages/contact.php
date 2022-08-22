<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">CONTACT</h1>
				<?php foreach($alamat as $a): ?>
					<ul>
						<li><?= $a['type']; ?></li>
						<li><?= $a['alamat']; ?></li>
						<li><?= $a['kota']; ?></li>
					</ul>
				<?php endForeach; ?>
                </div>
<?= $this->endSection(); ?>