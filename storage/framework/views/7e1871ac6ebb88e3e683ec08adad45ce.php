

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Thêm Báo Cáo Mới</h1>
    <form action="<?php echo e(route('issues.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="computer_id" class="form-label">Máy tính</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                <option value="" disabled selected>Chọn loại máy tính</option>
                <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($computer->id); ?>"><?php echo e($computer->computer_name); ?> (<?php echo e($computer->model); ?>)</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" placeholder="Nhập tên người báo cáo" required>
        </div>
        <div class="mb-3">
            <label for="reported_date" class="form-label">Ngày báo cáo</label>
            <input type="datetime-local" class="form-control" id="reported_date" name="reported_date" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả sự cố</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Mô tả chi tiết sự cố" required></textarea>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ</label>
            <select class="form-control" id="urgency" name="urgency" required>
                <option value="Low">Thấp</option>
                <option value="Medium">Trung bình</option>
                <option value="High">Cao</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Open">Mở</option>
                <option value="In Progress">Đang xử lý</option>
                <option value="Resolved">Đã giải quyết</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Thêm Báo Cáo</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\TH4\resources\views/issues/create.blade.php ENDPATH**/ ?>