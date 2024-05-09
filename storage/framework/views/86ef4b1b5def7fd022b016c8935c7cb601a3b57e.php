<header class="navbar navbar-fixed-top" role="banner">

    <div class="container-fluid">

        <ul class="top_links l_tinynav1">
<li>
                <a href="http://lims.moh.gm/">
                    <span><i class="icon ion-chevron-right"></i></span>
                    <?php echo e("Africa Laboratory Information System - The Gambia"); ?>

                </a>
            </li>
            <li>
                <a href="http://srs.moh.gm/">
                    <span><i class="icon ion-chevron-right"></i></span>
                    <?php echo e("Sample Referral System"); ?>

                </a>
            </li>           



        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="user_menu">
                <a href="<?php echo e(route('users.login')); ?>">
                    <i class="icon ion-chevron-right"></i> <?php echo e("Login Here"); ?>

                    <span class="navbar_el_icon ion-person"></span>
                </a>
            </li>
        </ul>

    </div>
</header>
<?php echo $__env->yieldSection(); ?>
<?php /**PATH /var/www/alis_gambia/resources/views/newdashboardheader.blade.php ENDPATH**/ ?>