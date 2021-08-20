<?php $__env->startSection('content'); ?>
<?php
// use App\Models\informe;
// $informe = informe::all();
// $id = $informe[1]->id;
// $informe = informe::find($id);
// $fondo= '#ffaa22';
?>
    <div class="row m-4 ">
        <div class="col">
            <h1>Delete book <?php echo e($dropBook->title); ?> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="<?php echo e(route('books.destroy', $dropBook->id)); ?>" method="POST" class="w-50 mx-auto confirmDrop p-4 rounded" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="formgroup row mb-3">
                    <label for="delete" class="col col-form-label fs-3 ">Confirm if you want to delete the book. </label>
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/books" class="btn btn-primary m-3" role="button">Cancel</a>

            </form>
            <br><br>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/books/drop.blade.php ENDPATH**/ ?>