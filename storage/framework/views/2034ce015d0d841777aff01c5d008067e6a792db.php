<br><br>
<?php $__env->startSection('content'); ?>
        <div class="row ">
            <div class=" ml-5">
                <h2 class="m-3">Books</h2>
                <div class="row ml-5 mx-auto">
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card col-3 showBooks m-4" >
                    <img src="images/books/<?php echo e($book->book_cover); ?>" alt="<?php echo e($book->title); ?> cover image" width="230" height="380"/>
                    <div class="card-body">
                            <h5 class="card-title">Book title: <?php echo e($book->title); ?> </h5>
                            <p class="card-text">Autor: <?php echo e($book->autor); ?> </p>
                            <p class="card-text">Status: <?php echo e($book->status); ?> </p>
                            <a href="books/<?php echo e($book->id); ?>" class="btn btn-primary">View more</a>
                            <a class="btn btn-success btn-sm d-inline" role="button" href="/books/<?php echo e($book->id); ?>/edit" >Edit</a>
                            <p class="card-text text-end"><?php echo e($book->id); ?> </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="/books/create" class="btn btn-success d-grid gap-2 col-6 mx-auto" role="button">Create a new Book</a>
                <br>
                <a href="/books/lendings/history" class="btn btn-primary d-grid gap-2 col-4 mx-auto" role="button">Lendings history</a>
            <br>
            <br>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/books/index.blade.php ENDPATH**/ ?>