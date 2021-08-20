<br><br>
<?php $__env->startSection('content'); ?>
<div class="row m-4 ">
        <div class="col">
            <h1>Edit book: <?php echo e($book->title); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <?php if($errors->any()): ?>
        <div class="w-75 mx-auto" >
          <div class="alert alert-danger  my-1" role="alert"> Error! Record not saved </div>
          <ul class="list-group-flush" >
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item list-group-item-danger"><?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>
            <form action="/books/<?php echo e($book->id); ?>" method="POST" class="w-75 mx-auto booksFormEdit p-4 rounded" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="formgroup row mb-3">
                    <label for="titleEdit" class="col-sm-4 col-form-label">Book Title: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="titleEdit" name="titleEdit" value="<?php echo e($book->title); ?>">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="autorEdit" class="col-sm-4 col-form-label">Autor: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="autorEdit" name="autorEdit" value="<?php echo e($book->autor); ?>">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="genreEdit" class="col-sm-4 col-form-label">Genre: </label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="genreEdit" name="genreEdit">
                        <option value="Action">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Politics">Politics</option>
                        <option value="Science Fiction">Science Fiction</option>
                        <option value="Literary fiction">Literary fiction</option>
                        <option value="Mistery">Mistery</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Horror">Horror</option>
                        <option value="Historical">Historical</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Dystopian">Dystopian</option>
                        <option value="Magical Realism">Magical Realism</option>
                        <option value="Realist Literature">Realist Literature</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="p_yearEdit" class="col-sm-4 col-form-label">Publication Year: </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="p_yearEdit" name="p_yearEdit" placeholder="YYYY"  value="<?php echo e($book->publication_year); ?>">
                    </div>
                </div>
                <div class="formgroup row mb-3">
                    <label for="book_cover" class="col-sm-4 col-form-label">Book Cover: </label>
                    <div class="col-sm-8">
                      <input class="form-control" type="file" id="book_cover" name="book_cover">
                    </div>
                </div>

                <div class="row w-50 mx-auto"> <button type="submit" class="btn btn-success btn-lg col-12 mx-auto text-center">Create</button></div>
            </form>
        </div>
    </div>
    <a href="/books" class="btn btn-primary m-3" role="button">Back</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/books/edit.blade.php ENDPATH**/ ?>