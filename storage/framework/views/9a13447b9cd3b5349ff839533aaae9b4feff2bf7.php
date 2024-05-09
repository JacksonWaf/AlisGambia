<?php $__env->startSection("content"); ?>
<div>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(route('user.home')); ?>"><?php echo e(trans('messages.home')); ?> </a></li>
		<li><a href="<?php echo e(route('user.index')); ?>"><?php echo e(Lang::choice('messages.user',1)); ?></a></li>
		<li class="active"><?php echo e(trans('messages.edit-user')); ?></li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-edit"></span>
		<?php echo e(trans('messages.edit-user-details')); ?>

	</div>
	<div class="panel-body
			<?php echo e((Auth::id() == $user->id || !auth()->user()->hasRole(App\Models\Role::getAdminRole()->name)) ? 'user-profile': ''); ?>">
		<?php if($errors->all()): ?>
		<div class="alert alert-danger">
			<?php echo e(HTML::ul($errors->all())); ?>

		</div>
		<?php endif; ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- For Users to edit their own profiles -->
					
					<?php if(Auth::id() == $user->id || !auth()->user()->hasRole(App\Models\Role::getAdminRole()->name)): ?>
					<ul class="nav nav-tabs" role="tablist">
						<li class="active">
							<a href="#edit-profile" role="tab" data-toggle="tab">
								<?php echo e(trans('messages.edit-profile')); ?></a>
						</li>
						<li>
							<a href="#change-password" role="tab" data-toggle="tab">
								<?php echo e(trans('messages.change-password')); ?></a>
						</li>
					</ul>
					<br />
					<?php endif; ?>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="edit-profile">
							<?php echo e(Form::model($user, array(
									'route' => array('user.update', $user->id),
									'method' => 'PUT', 'role' => 'form', 'files' => true,
									'id' => 'form-edit-user'
								 ))); ?>

							<div class="container-fluid">
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<?php echo e(Form::label('username', trans('messages.username'))); ?>

											<!-- <p class="form-control-static"><?php echo e($user->username); ?></p> -->
											<?php echo e(Form::text('username', $user->username, ['class' => 'form-control'])); ?>

										</div>
										<div class="form-group">
											<?php echo e(Form::label('full_name', trans('messages.full-name'))); ?>

											<?php echo e(Form::text('full_name', $user->name, ["placeholder" => "",
													'class' => 'form-control'])); ?>

										</div>
										<div class="form-group">
											<?php echo e(Form::label('email', trans('messages.email-address'))); ?>

											<?php echo e(Form::email('email', old('email'),
													["placeholder" => "",
													'class' => 'form-control'])); ?>

										</div>
										<div class="form-group">
											<?php echo e(Form::label('phone_contact', 'Phone Contact')); ?>

											<?php echo e(Form::text('phone_contact', old('phone_contact'), ['class' => 'form-control'])); ?>

										</div>
										<div class="form-group">
											<?php echo e(Form::label('designation', trans('messages.designation'))); ?>

											<?php echo e(Form::text('designation', old('designation'),
													["placeholder" => "Lab Technologist", 'class' => 'form-control'])); ?>

										</div>
										<div class="form-group">
											<?php echo e(Form::label('gender', trans('messages.gender'))); ?>

											<div><?php echo e(Form::radio('gender', '0', true)); ?><span class='input-tag'>
													<?php echo e(trans('messages.male')); ?></span></div>
											<div><?php echo e(Form::radio('gender', '1', false)); ?><span class='input-tag'>
													<?php echo e(trans('messages.female')); ?></span></div>
										</div>
										
										<?php if(Auth::id() != $user->id && auth()->user()->hasRole(App\Models\Role::getAdminRole()->name)): ?>
										<!-- For the administrator to reset other users' passwords -->
										<div class="form-group">
											<label for="reset-password"><a class="reset-password" href="javascript:void(0)"><?php echo e(trans('messages.reset-password')); ?>

											</label></a>
											<?php echo e(Form::password('reset-password',
														['class' => 'form-control reset-password hidden'])); ?>

										</div>
										<?php endif; ?>
										<div class="form-group actions-row">
											<?php echo e(Form::button('<span class="glyphicon glyphicon-save"></span> '.
													trans('messages.update'),
													['class' => 'btn btn-primary', 'onclick' => 'submit()'])); ?>

										</div>
									</div>
									<div class="col-md-4">
										<div class="profile-photo">
											<div class="form-group">
												<?php echo e(Form::label('image', trans('messages.photo'))); ?>

												<?php echo e(Form::file("image")); ?>

											</div>
											<?php if(is_null($user->image)): ?>
											<div class="form-group">
												<img class="img-responsive img-thumbnail user-image" src="" alt="<?php echo e(trans('messages.image-alternative')); ?>"></img>
											</div>
											<?php else: ?>
											<div class="form-group">
												<img class="img-responsive img-thumbnail user-image" src="<?php echo e($user->image); ?>" alt="<?php echo e(trans('messages.image-alternative')); ?>"></img>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
							<?php echo e(Form::close()); ?>

						</div>
						<!-- For users to edit their own passwords -->
						<div class="tab-pane fade" id="change-password">
							<?php echo e(Form::open(array('route' => array('user.updateOwnPassword', $user->id),
									 'id' => 'form-edit-password', 'method' => 'PUT'))); ?>

							<div class="form-group">
								<?php echo e(Form::label('current_password', trans('messages.current-password'))); ?>

								<?php echo e(Form::password('current_password', ['class' => 'form-control'])); ?>

								<span class="curr-pwd-empty hidden"><?php echo e(trans('messages.field-required')); ?></span>
							</div>
							<div class="form-group">
								<?php echo e(Form::label('new_password', trans('messages.new-password'))); ?>

								<?php echo e(Form::password('new_password', ['class' => 'form-control'])); ?>

								<span class="new-pwd-empty hidden"><?php echo e(trans('messages.field-required')); ?></span>
							</div>
							<div class="form-group">
								<?php echo e(Form::label('new_password_confirmation', trans('messages.repeat-password'))); ?>

								<?php echo e(Form::password('new_password_confirmation', ['class' => 'form-control'])); ?>

								<span class="new-pwdrepeat-empty hidden"><?php echo e(trans('messages.field-required')); ?></span>
								<span class="new-pwdmatch-error hidden"><?php echo e(trans('messages.password-mismatch')); ?></span>
							</div>
							<div class="form-group actions-row">
								<a class="btn btn-primary update-reset-password" href="javascript:void(0);">
									<span class="glyphicon glyphicon-save"></span><?php echo e(trans('messages.update')); ?>

								</a>
							</div>
							<?php echo e(Form::close()); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/user/edit.blade.php ENDPATH**/ ?>