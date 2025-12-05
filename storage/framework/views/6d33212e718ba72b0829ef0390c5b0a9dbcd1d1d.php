<?php $__env->startSection('button','Add'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1"
                    aria-label="..."  />
                      <p class="lead fw-normal mb-0 flex-grow-1"><?php echo e($task->description); ?></p>

                    <div class="d-flex gap-3">
                     <a href="<?php echo e(route('task.edit',$task->id )); ?>" class="btn btn-primary btn-sm">Edit</a>
                      <form action="<?php echo e(route('task.delete',$task->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </div>
                </div>
              </li>


                
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo-list-app\resources\views/Frontend/Tasks/index.blade.php ENDPATH**/ ?>