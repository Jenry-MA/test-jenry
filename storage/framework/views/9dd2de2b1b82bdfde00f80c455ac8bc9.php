
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <?php echo Form::open(['url' => '/todo', 'class' => 'form-horizontal', 'role' => 'form']); ?>

    <!-- Name Field -->
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <?php echo Form::label('name', 'Todo Name', ['class' => 'col-sm-3 control-label']); ?>

        <div class="col-sm-6">
            <?php echo Form::text('name', null, ['class' => 'text-white']); ?>

            <span class="help-block text-danger">
                    <?php echo e($errors -> first('name')); ?>

                </span>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
        <?php echo Form::label('user_id', 'Todo userID', ['class' => 'col-sm-3 control-label']); ?>

        <div class="col-sm-6">
            <?php echo Form::text('user_id', null, ['class' => 'text-white']); ?>

            <span class="help-block text-danger">
                    <?php echo e($errors -> first('user_id')); ?>

                </span>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <?php echo Form::submit('Create Button', ['class' => 'btn btn-primary']); ?>

        </div>
    </div>
    <?php echo Form::close(); ?>



</div>
</body>
</html>

<?php /**PATH /mnt/wsl/docker-desktop-bind-mounts/Ubuntu-20.04/27650140085009de4525a1db8f4a32f309f795c38150e91e66b892d2b0cb92a4/ToDo-List/resources/views/todo/create.blade.php ENDPATH**/ ?>