@extends('partials/master')
@section('main_content')

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

		<h1>{{$post->title}}</h1>

			{{$post->body}}

			<hr>

			<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)
					<li class="list-group-item">
						<strong>
						{{$comment->created_at->diffForHumans()}}: <!-- we've added use Carbon\Carbon on PostsController for this to work. -->
						</strong><br>	
						{{$comment->body}}
					</li>
				@endforeach
			</ul>
		   </div>

		   <hr>
		   @if (Auth::check())
			<div class="well">
                    <h4>Leave a Comment:</h4>
                    
                    <form role="form" method="POST" action="/posts/{{$post->id}}/comments">
                    	{{csrf_field()}}
                        <div class="form-group">
                            <textarea name="body" class="form-control" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            @else
            	<h3>Log in to leave a comment!</h3>
            @endif
		
	</div>
</div>

</body>
</html>

@endsection

