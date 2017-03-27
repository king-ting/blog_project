<?php $__env->startSection('main_content'); ?>

<div class="container">

<div class="col-sm-8 blog-main">
<h1>Edit Post</h1>
<hr>
	
	 <form enctype="multipart/form-data" method="POST" action="/post/<?php echo e($post->id); ?>/update">
	 <?php echo e(csrf_field()); ?>

	  <div class="form-group">
	  <img src="/images/<?php echo e($post->banner); ?>">
	   <label>Update Banner</label>
       <input type="file" name="post_banner"></input>
       </div>
	    <label for="body">Body</label>
	  <div class="form-group">
	    <label for="title" >Title</label>
	    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
	  </div>
	  <div class="form-group">
	 
	    <textarea class="form-control" id="body" name="body"><?php echo e($post->body); ?></textarea>
	  </div>
	  <div class="form-group">
	  <button type="submit" class="btn btn-default">Save Update</button>
	  </div>
	 
	  </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>