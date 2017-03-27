<?php $__env->startSection('main_content'); ?>



<div class="container">

    <div class="row">
    <h3>Latest Post</h3>
    <hr>
    		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo $__env->make('posts/posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div><!-- /.row -->

</div><!-- /.container -->





<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>