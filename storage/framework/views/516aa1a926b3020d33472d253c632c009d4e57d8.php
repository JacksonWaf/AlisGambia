<?php $__env->startSection("reportHeader"); ?>
<style type="text/css">
    table {
        padding: 2px;
    }
</style>



<table style="padding: 0px;">
    <thead>
        <tr>
            <td colspan="12"></td>
        </tr>
</table>
<table style="text-align:center;">
    <tr>
        <td colspan="12" style="text-align:center;">

            <!-- <?php echo e(@HTML::image(config('kblis.organization-logo'),  config('kblis.country') . trans('messages.court-of-arms'), array('width' => '40px'))); ?> -->
        </td>
    </tr>
    <tr>

        <td colspan="12" style="text-align:center;"><b>
                <?php echo e(strtoupper('MINISTRY OF HEALTH')); ?><br>
                <span style="font-size:14px">
                    <?php echo e(strtoupper(Auth::user()->facility->name)); ?><br>
                </span>

                <?php echo e(config('kblis.address-info')); ?></b>
            <?php echo e(config('kblis.report-name')); ?>

        </td>
    </tr>
    </thead>
</table>
<?php echo $__env->yieldSection(); ?><?php /**PATH /var/www/alis_gambia/resources/views/reportHeader.blade.php ENDPATH**/ ?>