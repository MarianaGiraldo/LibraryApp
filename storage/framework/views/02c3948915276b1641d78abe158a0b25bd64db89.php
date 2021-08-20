<?php $__env->startComponent('mail::message'); ?>
<h1>Book Info</h1>

<?php $__env->startComponent('mail::table'); ?>
| Book title          | Autor             | Genre            | Publication Year | Status      |
| ------------------- |:-----------------:| ----------------:|-----------------:|------------:|
| <?php echo e($book->title); ?>    |  <?php echo e($book->autor); ?> |  <?php echo e($book->genre); ?>|<?php echo e($book->publication_year); ?>| <?php echo e($book->status); ?> |
<?php if (isset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906)): ?>
<?php $component = $__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906; ?>
<?php unset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => $url, 'color' => 'success']); ?>
Borrow book
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/mail/book.blade.php ENDPATH**/ ?>