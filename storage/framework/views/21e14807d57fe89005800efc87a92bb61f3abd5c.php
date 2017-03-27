<?php $__env->startSection('main_content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                    

                <div class="panel-body text-center">
                    <ul>
                        <li><img src="/avatar/<?php echo e(Auth::user()->avatar); ?>">
                            <form enctype="multipart/form-data" method="POST" action="/home">
                               <?php echo e(csrf_field()); ?>

                                <label>Update Profile Image</label>
                                <input type="file" name="avatar"></input>
                                <input type="submit" class=
                                "pull-right btn btn-sm btn-default" name="submit"></input>
                            </form>
                        </li>
                        <li><h3>Name:</h3> <?php echo e(Auth::user()->name); ?></li>
                        <li><h3>Email:</h3> <?php echo e(Auth::user()->email); ?></li>
                        
                    </ul>
                </div>
            </div>


                <div class="panel panel-default">
                <div class="panel-heading">Published Blogs</div>
                    

                <div class="panel-body">

                 <table class="table">
                        <tr>
                            <th>Blog title</th>
                            <th>Time created</th>
                            <th> </th>
                            <th> </th>
                        </tr>

                      
                           
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr>
                                <td>
                                    <a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                                </td>
                                <td>
                                    <?php echo e($post->created_at); ?>

                                </td>
                                <td>
                                    <a href="/posts/<?php echo e($post->id); ?>/edit"><button type="submit" class="btn btn-warning">EDIT</button></a>
                                </td>
                                <td><a href="<?php echo e(route('post/delete',['post_id'=>$post->id])); ?>"><button type="submit" class="btn btn-danger">DELETE</button></a>
                                </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                  </table>
                    
                </div>
            </div>






        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>