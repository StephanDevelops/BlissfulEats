<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </head>
  <body>

    <div class="container-scroller">

    <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <div class="container">


        <h1>Customer Orders</h1>

        <form action="<?php echo e(url('/search')); ?>" method="get">

            <?php echo csrf_field(); ?>

            <input type="text" name="search" style="color: blue;">

            <input type="submit" value="Search" class="btn btn-success">
        </form>

        <table>
            <tr align="center">
                <td style="padding: 30px;">Name</td>
                <td style="padding: 30px;">Number</td>
                <td style="padding: 30px;">Address</td>
                <td style="padding: 30px;">Foodname</td>
                <td style="padding: 30px;">Price</td>
                <td style="padding: 30px;">Quantity</td>
                <td style="padding: 30px;">Total Price</td>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr align="center" style="background-color: black;">
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->phone); ?></td>
                <td><?php echo e($data->address); ?></td>
                <td><?php echo e($data->foodname); ?></td>
                <td><?php echo e($data->price); ?></td>
                <td><?php echo e($data->quantity); ?></td>
                <td>$<?php echo e((float)$data->price * (float)$data->quantity); ?></td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>

    </div>

    <!-- container-scroller -->
   <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html>
<?php /**PATH /Users/stephan/Documents/restaurant/resources/views/admin/orders.blade.php ENDPATH**/ ?>