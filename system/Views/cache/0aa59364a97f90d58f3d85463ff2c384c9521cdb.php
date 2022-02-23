

<?php $__env->startSection('content'); ?>
<?php
    if(isset($user))
?>
<div class="row">
    <div class="col-md-8">
        <span>Vew donation data graphs for different years of donations</span>
    </div>
    <div class="col-md-4">
        
        <select id="change-year" class="form-control">
            <option value="<?php echo e(date("Y")); ?>"><?php echo e(date("Y")); ?></option>
            <?php for($i = 1; $i < 6; $i++): ?>
                <option value="<?php echo e(date("Y") - $i); ?>"><?php echo e(date("Y") - $i); ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/data-visualization.js')); ?>"></script>
    <script>
        var windowObjectReference;var windowFeatures = "popup";function printReport(url) {windowObjectReference = window.open(window.location.origin + url, "SANYU BABIES' HOME", windowFeatures);}
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sanyubabies\app\views/admin/index.blade.php ENDPATH**/ ?>