

<?php $__env->startSection('content'); ?>
<div class="row p-4">
        <div class="col">
            <h1>Users</h1>
            <table class="table table-hover table-bordered border-success">
                <tr class="table-primary table-active">
                            <th>ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">View</th>
                            <th scope="col">History</th>
                </tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table-light">
                            <td class="table-warning" scope="row" > <?php echo e($user->id); ?></td>
                            <td ><?php echo e($user->name); ?> </td>
                            <td ><?php echo e($user->email); ?> </td>
                            <td ><?php echo e($user->birthDate); ?> </td>
                            <td><a href="users/<?php echo e($user->id); ?>" class="btn btn-success">View User</a></td>
                            <td><a href="users/<?php echo e($user->id); ?>/lendings/history" class="btn btn-primary">View History</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <a href="users/create" class="btn btn-primary d-grid gap-2 col-6 mx-auto" role="button">Create a new user</a>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/users/index.blade.php ENDPATH**/ ?>