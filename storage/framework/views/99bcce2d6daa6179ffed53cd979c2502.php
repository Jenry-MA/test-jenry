<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <?php if(isset($todoList)): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ToDo Name</th>
                            <th>Completed</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $todoList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($todo->name); ?></td>
                                <td><?php echo e($todo->complete? 'Completed' : 'Pending'); ?></td>
                                <td>
                                    <?php echo Form::open(['route' => ['todo.update', $todo->id], 'class' => 'form-inline', 'method' => 'put']); ?>

                                    <?php if($todo->complete): ?>
                                        <?php echo Form::submit('Incomplete', ['class' => 'btn btn-info btn-xs']); ?>

                                    <?php else: ?>
                                        <?php echo Form::submit('Complete', ['class' => 'btn btn-success btn-xs']); ?>

                                    <?php endif; ?>
                                    <?php echo Form::close(); ?>


                                    <?php echo Form::open(['route' => ['todo.destroy', $todo->id], 'class' => 'form-inline', 'method' => 'delete']); ?>

                                    <?php echo Form::hidden('id', $todo->id); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <?php echo $todoList->render(); ?>

                </div>
            <?php else: ?>
                <div class="text-center">
                    <h3>No todos available yet</h3>
                    <p> <a style="color:black" href="<?php echo e(route('create')); ?>">
                            Create new todo
                        </a></p>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>
<?php /**PATH /mnt/wsl/docker-desktop-bind-mounts/Ubuntu-20.04/27650140085009de4525a1db8f4a32f309f795c38150e91e66b892d2b0cb92a4/ToDo-List/resources/views/index.blade.php ENDPATH**/ ?>