<?= $this->extend('auth/templates/index');?>
<?= $this->section('content');?>
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.loginTitle')?></h1>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= url_to('login') ?>" class="user" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="form-group">
							<input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>
                     <div class="form-group">
							<input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

 <?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="custom-control custom-checkbox small">
								<input type="checkbox" name="remember" class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif; ?>

<button type="submit" class="btn btn-primary btn-user btn-block"><?=lang('Auth.loginAction')?></button>
                                        <hr>                                        

                                    <div class="text-center">
                                    	<?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
                                        
                                    </div>
                                    <div class="text-center">
                                    	<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?= $this->endSection();?>
