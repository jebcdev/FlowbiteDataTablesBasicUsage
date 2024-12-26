<div class="relative overflow-x-auto">
    <table 
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
        id="default-table"
    >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-1">
                    ID
                </th>
                <th scope="col" class="px-2 py-1">
                    Name
                </th>
                <th scope="col" class="px-2 py-1">
                    Email
                </th>
                <th scope="col" class="px-2 py-1">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo e($user?->id); ?>

                    </th>
                    <td class="px-2 py-1">
                        <?php echo e($user?->name); ?>

                    </td>
                    <td class="px-2 py-1">
                        <?php echo e($user?->email); ?>

                    </td>
                    <td class="px-2 py-1">
                        <?php if (isset($component)) { $__componentOriginalaf3278fdc0ba5fde23717908b16c45b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf3278fdc0ba5fde23717908b16c45b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-a','data' => ['href' => '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('secondary-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#']); ?>
                            Edit
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf3278fdc0ba5fde23717908b16c45b0)): ?>
<?php $attributes = $__attributesOriginalaf3278fdc0ba5fde23717908b16c45b0; ?>
<?php unset($__attributesOriginalaf3278fdc0ba5fde23717908b16c45b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf3278fdc0ba5fde23717908b16c45b0)): ?>
<?php $component = $__componentOriginalaf3278fdc0ba5fde23717908b16c45b0; ?>
<?php unset($__componentOriginalaf3278fdc0ba5fde23717908b16c45b0); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => ['class' => 'px-2 py-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-2 py-1']); ?>Delete <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $attributes = $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $component = $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById("default-table") && typeof window.simpleDatatables !== 'undefined') {
            const dataTable = new window.simpleDatatables.DataTable("#default-table", {
                searchable: true,
                perPageSelect: false
            });
        }
    });
</script>
<?php /**PATH D:\laragon\www\FlowbiteDataTablesBasicUsage\resources\views/users/table.blade.php ENDPATH**/ ?>