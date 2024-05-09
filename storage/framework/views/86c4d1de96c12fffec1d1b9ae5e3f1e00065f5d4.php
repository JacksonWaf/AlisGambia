<table>
    <thead>
        <tr>
            <th>Source Facility</th>
            <th>Patient Name</th>
            <th>Sample Barcode</th>
            <th>Package Barcode</th>
            <th>Suspected Disease</th>
            <th>Time Picked</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($patient->Source_Facility); ?></td>
            <td><?php echo e($patient->Patient_Name); ?></td>
            <td><?php echo e($patient->Sample_Barcode); ?></td>
            <td><?php echo e($patient->Package_Barcode); ?></td>
            <td><?php echo e($patient->Suspected_Disease); ?></td>
            <td><?php echo e($patient->date_picked); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- <?php $__currentLoopData = $isolatedOrganisms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isolatedOrganism): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(substr($isolatedOrganism->Recieved,0,-9)); ?></td>
            <td><?php echo e(substr($isolatedOrganism->collected,0,-9)); ?></td>
            <td><?php echo e($isolatedOrganism->number); ?></td>
            <td><?php echo e($isolatedOrganism->labID); ?></td>
            <td><?php echo e($isolatedOrganism->PatientName); ?></td>
            <td><?php echo e($isolatedOrganism->Ward); ?></td>
            <td><?php echo e(($isolatedOrganism->gender == 1) ? 'F' : 'M'); ?></td>
            <td><?php echo e($isolatedOrganism->age); ?></td>
            <td><?php echo e(($isolatedOrganism->hospitalized == 1) ? 'Yes' : (($isolatedOrganism->hospitalized == '0') ? 'No' : '')); ?></td>
            <td><?php echo e(($isolatedOrganism->onAntibiotics == 1) ? 'Yes' : ''); ?></td>
            <td><?php echo e($isolatedOrganism->DonAntibiotics); ?></td>
            <td><?php echo e($isolatedOrganism->Drugs); ?></td>
            <td><?php echo e($isolatedOrganism->diagnosis); ?></td>
            <td><?php echo e($isolatedOrganism->SpecimenType); ?></td>
            <td><?php echo e($isolatedOrganism->admission_date); ?></td>
            <td><?php echo e($isolatedOrganism->IsolatedOrganism); ?></td>
            <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <?php echo e(\getIsolatedOrganismResult($isolatedOrganism->isoID, $drug->id)); ?>

            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
    </tbody>
</table><?php /**PATH /var/www/alis_gambia/resources/views/reports/alisrestrack/export.blade.php ENDPATH**/ ?>