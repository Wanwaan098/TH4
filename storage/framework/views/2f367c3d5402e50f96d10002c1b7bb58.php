

<?php $__env->startSection('content'); ?>
    <h1>Sửa báo cáo</h1>
    <form action="<?php echo e(route('issues.update', $issue->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="computer_id" class="form-label">Máy tính</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                <option value="">Chọn loại máy tính</option>
                <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($computer->id); ?>" <?php echo e($issue->computer_id == $computer->id ? 'selected' : ''); ?>>
                        <?php echo e($computer->computer_name); ?> (<?php echo e($computer->model); ?>)
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo sự cố</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" value="<?php echo e($issue->reported_by); ?>" required>
        </div>
        <div class="mb-3">
            <label for="reported_date" class="form-label">Ngày báo cáo</label>
            <input type="datetime-local" class="form-control" id="reported_date" name="reported_date" value="<?php echo e(\Carbon\Carbon::parse($issue->reported_date)->format('Y-m-d\TH:i')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" required><?php echo e($issue->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ sự cố</label>
            <select class="form-control" id="urgency" name="urgency" required>
                <option value="Low" <?php echo e($issue->urgency == 'Low' ? 'selected' : ''); ?>>Low</option>
                <option value="Medium" <?php echo e($issue->urgency == 'Medium' ? 'selected' : ''); ?>>Medium</option>
                <option value="High" <?php echo e($issue->urgency == 'High' ? 'selected' : ''); ?>>High</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Open" <?php echo e($issue->status == 'Open' ? 'selected' : ''); ?>>Open</option>
                <option value="In Progress" <?php echo e($issue->status == 'In Progress' ? 'selected' : ''); ?>>In Progress</option>
                <option value="Resolved" <?php echo e($issue->status == 'Resolved' ? 'selected' : ''); ?>>Resolved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TH4\resources\views/issues/edit.blade.php ENDPATH**/ ?>