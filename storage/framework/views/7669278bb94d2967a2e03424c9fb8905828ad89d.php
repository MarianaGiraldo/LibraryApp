

<?php $__env->startSection('content'); ?>
    <div class="row m-4 ">
        <div class="col">
            <h1>Borrow book: <?php echo e($book->title); ?> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <?php if($errors!=null): ?>
        <div class="w-75 mx-auto" >
          <ul class="list-group-flush" >
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item list-group-item-danger"><?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>         
        <?php endif; ?>
            <form action="/books/<?php echo e($book->id); ?>/borrow" method="POST" class="w-75 mx-auto formulario p-4 rounded" >
                <?php echo csrf_field(); ?>
                <div class="formgroup row mb-3">
                    <label for="mail" class="col-sm-3 col-form-label">Email: </label>
                    <div class="col-sm-9">
                      <input  type="email" class="form-control" id="email" name="email" placeholder="Type your email" >
                      <p class="text-muted">You need to be registered</p>
                    </div>
                </div>
                <br>
                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-primary col-12 mx-auto text-center">Borrow book</button></div>
                <br>
            </form>
        </div>
    </div>
    <a href="/books/<?php echo e($book->id); ?>" class="btn btn-primary m-3" role="button">Atrás</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/lendings/borrow.blade.php ENDPATH**/ ?>