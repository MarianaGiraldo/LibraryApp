

<?php $__env->startSection('content'); ?>
        <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">Lendings History</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">Lending type</th>
            <th scope="col">Book title</th>
            <th scope="col">User name</th>
        </tr>
        <?php $i=0; ?>
    <?php $__currentLoopData = $lendings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="table-light">
            <td class="table-warning" scope="row" ><?php echo e($lending->id); ?></td>
            <td ><?php echo e($lending->type); ?> </td>
            <td ><?php echo e($books[$i]->title); ?> </td>
            <td ><?php echo e($users[$i]->firstName); ?> <?php echo e($users[$i]->lastName); ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
    </div>
    <a href="/books" class="btn btn-warning m-3" role="button">Back</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/lendings/show.blade.php ENDPATH**/ ?>