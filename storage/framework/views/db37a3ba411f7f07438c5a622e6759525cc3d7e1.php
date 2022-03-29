<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-indigo-600 leading-tight">
            <?php echo e(__('Tickets / Edit')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
<style>
    body {
    background-color: #f7f6f6
}

.card {
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px
}
</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form  method="POST" action="/my/tickets/<?php echo e($ticket->id); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($ticket->name); ?>">
                </div>

                <div>
                    <label for="subject" class="form-label">Subjects</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="<?php echo e($ticket->subject); ?>">
                </div>

                <div>
                    <label for="label" class="form-label">Label</label>
                    <input type="text" class="form-control" id="label" name="label" value="<?php echo e($ticket->label); ?>">
                </div>

                <?php if(Auth::user()->role == 'Admin' ): ?>
                <div>
                    <label for="assignee_id" class="form-label">Assignee ID</label>
                    <select class="form-select" aria-label="Default select example" id="assignee_id"  name="assignee_id" value="<?php echo e($ticket->assignee_id); ?>" >
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>" <?php echo e(($ticket->assignee_id==$user->id) ?"selected" :"''"); ?>><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div>
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select" aria-label="Default select example" id="priority"  name="priority" value="<?php echo e($ticket->priority); ?>">
                    <option value="High" <?php echo e(($ticket->priority=='High') ?"selected" :"''"); ?>>High</option>
                    <option value="Low"  <?php echo e(($ticket->priority=='Low') ?"selected" :"''"); ?>>Low</option>
                    <option value="Mid"  <?php echo e(($ticket->priority=='Mid') ?"selected" :"''"); ?>>Mid</option>
                    </select>
                </div>



                <div>
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" id="status"  name="status" value="<?php echo e($ticket->status); ?>">
                    <option value="Rejected" <?php echo e(($ticket->status=='Rejected') ?"selected" :"''"); ?>>Rejected</option>
                    <option value="Resolve" <?php echo e(($ticket->status=='Resolve') ?"selected" :"''"); ?>>Resolve</option>
                    </select>
                </div>

                <?php endif; ?>



                <div>

                    Submitted by: <?php echo e($ticket->submitter->name); ?> <br>
                    Submitted at: <?php echo e($ticket->created_at); ?>

                </div>

                <input type="hidden" id="id" name="id" value="<?php echo e($ticket->id); ?>">

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-dark">Update Ticket</button>
                </div>

                </form>

                <form method="POST" action="/comments">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="messages" class="form-label">Comments</label>
                    <textarea class="form-control" rows="7" placeholder="Message" class="form-control" id="messages" name="messages"></textarea>
                </div>

                <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-dark">Submit Comment Ticket</button>
                </div>


                </form>




                <div>
                <?php $__currentLoopData = $ticket->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"><span><small class="font-weight-bold text-primary"> <?php echo e($comment->user->name); ?></small> <small class="font-weight-bold"><?php echo e($comment->messages); ?></small></span> </div> <small><?php echo e($comment->created_at); ?>

                        <form method="POST" action="/comments/<?php echo e($comment->id); ?>">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form></small>
                </div>

                </div>
<br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>




                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/jacobes/phpfile/ticketing_system/resources/views/tickets/show.blade.php ENDPATH**/ ?>