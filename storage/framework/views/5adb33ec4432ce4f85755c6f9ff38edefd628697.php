<?php $__env->startSection('content'); ?>
<div class="row m-4 ">
        <div class="col">
            <h1>¿Delete User <?php echo e($dropUser-> firstName); ?> <?php echo e($dropUser-> lastName); ?>?</h1> <br><br>
        </div>
    <div class="row">
            <div class="col">
                <form action="users/<?php echo e($dropUser->id); ?> " method="POST" class="w-50 mx-auto confirmDrop p-4 rounded">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="formgroup row mb-3">
                    <label for="delete" class="col col-form-label fs-3 ">Confirm if you want to delete the user. </label>
                </div>
                <button type="submit" class="btn btn-warning">Delete</button>
                </form>
                <a href="/users" class="btn btn-primary m-3" role="button">Cancel</a>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/users/drop.blade.php ENDPATH**/ ?>