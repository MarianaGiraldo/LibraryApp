<br><br><br>
<div style="background-image: url(<?php echo e(url('/images/library.jpg')); ?>);">
     <br><br><br><br><h1 class="text-primary titulo pl-4 mx-auto" style="width: 400px; background-color: #e3f2fd">The Golden Book Library</h1><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <br>
<?php $__env->startSection('index_content'); ?>
<div class="row mx-2">
  <div class="col-6 mr-4">
    <h2 class="mx-3 border-bottom-gray">Library</h2>
    <hr>
    <p class="">We are an open collaborative public library, designed to share the reading passion where everyone can get access.</p>
    <p>Our page is based on users and books, so if you are new in our page, feel free to register and see the available books we have for you.</p>
  </div>
  <div class="col-1 mx-3"></div>
  <div class="col-4 ml-4 text-end justify-content-end">
    <h2 class="mx-3 border-bottom-gray">Books</h2>
    <hr class="">
    <p class="">We have plenty of books for you. Also you can contribute to the page by adding and borrowing a new book, so anyone who is interested could read it too</p>
    <p>If you are new in our page, feel free to register and see the available books we have for you.</p>
  </div>
</div>

<br>
<h2 class="mx-3 border-bottom-gray">Galery</h2>
<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo e(url('/images/library.jpg')); ?>" class="d-block w-100" alt="Library Image">
        </div>
        <div class="carousel-item">
          <img src="<?php echo e(url('/images/library2.jpg')); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo e(url('/images/library3.jpg')); ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/index.blade.php ENDPATH**/ ?>