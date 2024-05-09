<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-theme.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layout.css')); ?>" />
    <title><?php echo e(config('kblis.name')); ?> <?php echo e(config('kblis.version')); ?></title>
</head>

<body>
    <div class="container login-page">
        <div class="header">
            <?php echo $__env->make('user.loginHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="login-form">
            <div class="form-head">
                <h4> Login </h4>
                <?php if($errors->all()): ?>
                <div class="alert alert-danger">
                    <?php echo e(HTML::ul($errors->all())); ?>

                </div>
                <?php elseif(Session::has('message')): ?>
                <div class="alert alert-danger"><?php echo e(Session::get('message')); ?></div>
                <?php endif; ?>
            </div>

            <?php echo e(Form::open(array("route" => "login", "autocomplete" => "off", "class" => "form-horizontal", "role" => "form"))); ?>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <?php echo e(Form::text("username", old("username"), array( "placeholder" => trans('messages.username'), "class" => "form-control" ))); ?>

                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <?php echo e(Form::password("password", array( "placeholder" => Lang::choice('messages.password',1), "class" => "form-control" ))); ?>

                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <?php echo e(Form::select("hubid", $hubs, Request::get('hubid'),['class'=>'form-control','id'=>'hub'])); ?>

                </div>
            </div>

            <div class="form-group">
                <div>
                    <?php echo e(Form::button(trans('messages.login'), array( "type" => "submit", "class" => "btn btn-primary btn-block" ))); ?>

                </div>
            </div>
            <?php echo e(Form::close()); ?>

            <div class="smaller-text alone foot">
                <p><a href="i/ALIS_USER_GUIDE.pdf">User Guide</a></p>
                <p>
                    <?php echo e(config('kblis.name')); ?> - a Laboratory Information System
                    originally developed by GAHLC with Support from Global Fund.
                </p>
            </div>
        </div>
        <div class="footer">
            <?php echo $__env->make('user.loginFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/user/login.blade.php ENDPATH**/ ?>