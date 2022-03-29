<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-red-600 leading-tight">
            <?php echo e(__('Users/ Edit')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <form method="POST" action="/users/<?php echo e($user->id); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

                    <div>
                         <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>">
                    </div>

                    <div>
                    <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
                    </div>

                    <div>
                    <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" id="password" name="password" value="">
                    </div>

                    <input type="hidden" id="id" name="id" value="<?php echo e($user->id); ?>">

                    <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /home/jacobes/phpfile/ticketing_system/resources/views/users/show.blade.php ENDPATH**/ ?>