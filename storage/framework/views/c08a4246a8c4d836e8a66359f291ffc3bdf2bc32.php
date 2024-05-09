<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&subset=latin-ext,latin" rel="stylesheet" type="text/css">-->
    <link rel="shortcut icon" href="<?php echo e(asset('i/favicon.png')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/ui-lightness/jquery-ui-min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-theme.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dataTables.bootstrap.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layout.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/select2.min.css')); ?>">

    <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-ui-min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/moment.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/combodate.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/dataTables.bootstrap.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/script.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/select2.min.js')); ?> "></script>
    <!-- print special used in bb module -->
    <script type="text/javascript" src="<?php echo e(asset('js/print_special.js')); ?> "></script>
    <!--   -->

    <script type="text/javascript" src="<?php echo e(asset('js/validator.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrapValidator.min-0.5.1.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/stockcard.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.easing.1.3.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/tinynav.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('js/perfect-scrollbar-0.4.8.with-mousewheel.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/common.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard.js')); ?> "></script>



    <!-- jQuery barcode script -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-barcode-2.0.2.js')); ?>"></script>
    <title><?php echo e(config('kblis.name')); ?> </title>
</head>
<body class="side_nav_hover">
<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- main content -->
<div id="main_wrapper">
    <div class="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->yieldContent("content"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- side navigation -->
<?php echo $__env->make("sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\alis_gambia\resources\views/layout.blade.php ENDPATH**/ ?>