<?php $__env->startSection('main_content'); ?>

     <?php echo $__env->make('partials/banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     
     <div class="album text-muted">
      <div class="container">
       <div class="row">

        
          
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('posts/index_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
          <a href="/all_post"><button class="btn btn-default">Read More</button></a>
      </div>
    </div>
          
        
   
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>