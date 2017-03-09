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

			<div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
		
	</div>
</div>

</body>
</html>

@endsection

