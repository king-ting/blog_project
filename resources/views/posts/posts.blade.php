<!-- the codes below outputs the blog posts that you see in localhost:8000/all_post -->

<div class="col-sm-8 blog-main">

          <div class="blog-post">
              <img src="/images/{{$post->banner}}" class="img-size img-responsive"> 
              <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
               <!-- <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> -->

            		{{$post->body}}
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->