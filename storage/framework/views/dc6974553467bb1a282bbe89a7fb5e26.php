

<?php $__env->startSection('content'); ?>
    <h1>Chi tiết báo cáo</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID Báo cáo: <?php echo e($issue->id); ?></h5>
            <p class="card-text"><strong>Tên máy tính:</strong> <?php echo e($issue->computer->computer_name); ?></p>
            <p class="card-text"><strong>Model:</strong> <?php echo e($issue->computer->model); ?></p>
            <p class="card-text"><strong>Ngừoi baso cáo:</strong> <?php echo e($issue->reported_by); ?></p>
            <p class="card-text"><strong>Ngày báo cáo:</strong> <?php echo e($issue->reported_date); ?></p>
            <p class="card-text"><strong>Mô tả:</strong> <?php echo e($issue->description); ?></p>
            <p class="card-text"><strong>Mức độ sự cố:</strong> <?php echo e($issue->urgency); ?></p>
            <p class="card-text"><strong>Trạng thái:</strong> <?php echo e($issue->status); ?></p>
            <a href="<?php echo e(route('issues.index')); ?>" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TH4\resources\views/issues/show.blade.php ENDPATH**/ ?>