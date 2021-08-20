<?php $__env->startSection('content'); ?>
    <div class="row m-4 ">
        <div class="col mx-auto text-center">
            <h1>Information of Book <?php echo e($book->id); ?> </h1>
        </div>
    </div>
    <div class="row">
        <div class="w-75 mx-auto rounded">
          <div class="card show w-50 m-auto py-3">
            <img src="/images/books/<?php echo e($book->book_cover); ?>" alt="<?php echo e($book->title); ?> cover image" class="rounded mx-auto d-block" width="290" height="440" />
          </div>
          <div class="row my-3">
          <h4>Book: <?php echo e($book->title); ?> </h4>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Book autor: </h5>
                  <p class="card-text"><?php echo e($book->autor); ?></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Genre:</h5>
                  <p class="card-text"><?php echo e($book->genre); ?></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Publication Year:</h5>
                  <p class="card-text"><?php echo e($book->publication_year); ?></p>
                </div>
              </div>
            </div>

          </div>
          <h5>Book status: <?php echo e($book->status); ?> </h5>
          <?php if($book->status === 'Available'): ?>
            <a href="/books/<?php echo e($book->id); ?>}/borrow" class="btn btn-success m-3 col btn-lg" role="button">Borrow book</a>
            <a href="/books/<?php echo e($book->id); ?>/confirmMail" class="btn btn-primary m-3 col btn-lg" role="button">Email me the Book info</a>
          <?php else: ?>
            <a href="/books/<?php echo e($book->id); ?>}/return" class="btn btn-success m-3 col btn-lg" role="button">Return book</a>
          <?php endif; ?>

          </div>
    </div>

    <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">All Books</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">Book title</th>
            <th scope="col">Autor</th>
            <th scope="col">Genre</th>
            <th scope="col">Publication year</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="table-light">
            <td class="table-warning" scope="row" ><?php echo e($book->id); ?></td>
            <td ><?php echo e($book->title); ?> </td>
            <td ><?php echo e($book->autor); ?> </td>
            <td ><?php echo e($book->genre); ?> </td>
            <td ><?php echo e($book->publication_year); ?> </td>
            <td ><?php echo e($book->status); ?> </td>
            <td ><a class="btn btn-success btn-sm" role="button" href="/books/<?php echo e($book->id); ?>/edit" >Edit</a> </td>
            <td ><a class="btn btn-danger btn-sm" role="button" href="/books/<?php echo e($book->id); ?>/drop" >Delete</a> </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    </div>
    <a href="/books" class="btn btn-warning m-3" role="button">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/books/show.blade.php ENDPATH**/ ?>