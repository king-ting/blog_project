<?php $__env->startSection('main_content'); ?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	.form-control {
		max-width: 100%;
	}

	textarea {
    min-height: 100px;
    }

	</style>
</head>
<body>
<div class="container">
	<div class="col-sm-8 blog-main">

		<h1><?php echo e($post->title); ?></h1>

			<?php echo e($post->body); ?>


			<hr>

			<div class="comments">
			<ul class="list-group">
				<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="list-group-item">
						<strong>
						<?php echo e($comment->created_at->diffForHumans()); ?>: <!-- we've added use Carbon\Carbon on PostsController for this to work. -->
						</strong><br>	
						<?php echo e($comment->body); ?>

					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		   </div>

		   <hr>
		   <?php if(Auth::check()): ?>
			<div class="well">
                    <h4>Leave a Comment:</h4>
                    
                    <form role="form" method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
                    	<?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <textarea name="body" class="form-control" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            <?php else: ?>
            	<h3>Log in to leave a comment!</h3>
            <?php endif; ?>
		
	</div>
</div>

</body>
</html>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('partials/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>