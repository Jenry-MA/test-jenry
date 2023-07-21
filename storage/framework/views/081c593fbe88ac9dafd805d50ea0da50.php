<?php $__env->startSection('body'); ?>
<?php echo Form::open(['url' => '/todo', 'class' => 'form-horizontal', 'role' => 'form']); ?>

        <!-- Name Field -->
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <?php echo Form::label('name', 'Todo Name', ['class' => 'col-sm-3 control-label']); ?>

            <div class="col-sm-6">
                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                <span class="help-block text-danger">
                    <?php echo e($errors -> first('name')); ?>

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

<?php $__env->stopSection(); ?>
<?php /**PATH /mnt/wsl/docker-desktop-bind-mounts/Ubuntu-20.04/27650140085009de4525a1db8f4a32f309f795c38150e91e66b892d2b0cb92a4/ToDo-List/resources/views/create.blade.php ENDPATH**/ ?>