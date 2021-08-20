

<?php $__env->startSection('content'); ?>
    <div class="row m-4 ">
        <div class="col mx-auto text-center">
            <h1>Information of user <?php echo e($user->firstName); ?> <?php echo e($user->lastName); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="w-75 mx-auto rounded">
          <div class="row my-3">
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Email: </h5>
                  <p class="card-text"><?php echo e($user->email); ?></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Birth Date:</h5>
                  <p class="card-text"><?php echo e($user->birthDate); ?></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card show">
                <div class="card-body">
                  <h5 class="card-title">Password:</h5>
                    <details>
                      <summary>Show password:</summary>
                        <p class="card-text"><?php echo e($user->password); ?></p>
                    </details>
                </div>
              </div>
            </div>
            
          </div>         
        </div>  
    </div>
    
    <div class="row mt-5 p-4">
      <table class="table table-hover table-bordered border-success w-75 mx-auto">
      <h2 class="mx-auto text-center">All Users</h2>
        <tr class="table-primary table-active">
            <th>ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="table-light">
            <td class="table-warning" scope="row" ><?php echo e($user->id); ?></td>
            <td ><?php echo e($user->firstName); ?> </td>
            <td ><?php echo e($user->lastName); ?> </td>
            <td ><?php echo e($user->email); ?> </td>
            <td ><?php echo e($user->birthDate); ?> </td>
            <td ><a class="btn btn-success btn-sm" role="button" href="/users/<?php echo e($user->id); ?>/edit" >Edit</a> </td>
            <td ><a class="btn btn-danger btn-sm" role="button" href="/users/<?php echo e($user->id); ?>/drop" >Delete</a> </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
    </div>
    <a href="/users" class="btn btn-warning m-3" role="button">Back</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\XAMPP\htdocs\LaravelProject\LibraryApp\resources\views/users/show.blade.php ENDPATH**/ ?>