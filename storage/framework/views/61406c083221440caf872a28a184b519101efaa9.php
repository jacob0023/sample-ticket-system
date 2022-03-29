<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-indigo-600 leading-tight">
            <?php echo e(__('Tickets')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <style>
        #group{
            width:500px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="<?php echo e(route('tickets.create')); ?>" class="btn btn-dark btn-sm">Create a Ticket</a>
                <hr>
                <form action="">
                <div class="input-group" id="group">
                       <input type="text" class="form-control" id="searchbox" name="searchbox">
                       <button type="submit" id="Search" class="btn btn-warning btn-sm">Search</button>
                       </div>
                </form>
                <hr>
                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card text-white bg-dark w-50" >
                    <div class="card-body">
                        <a><?php echo e($ticket->name); ?></a>
                        <a><?php echo e($ticket->priority); ?></a> 
                        <form method="POST" action="/tickets/<?php echo e($ticket->id); ?>">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <a href ='/tickets/<?php echo e($ticket->id); ?>' ><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <a href = ''><button type="submit" class="btn btn-danger btn-sm" >Delete</button></a>
                        </form>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($ticket->subject); ?> </h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="card-footer">
                        <?php echo e($ticket->status); ?>

                       <hr>
                        <?php echo e(date('M d, Y h:i',strtotime($ticket->created_at))); ?>

                        <br>
                        <?php echo e(date('M d, Y h:i',strtotime($ticket->updated_at))); ?>

                        </div>
                    </div>
                    </div>
                    <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /home/jacobes/phpfile/ticketing_system/resources/views/tickets/index.blade.php ENDPATH**/ ?>