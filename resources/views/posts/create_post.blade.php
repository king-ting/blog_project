@extends('partials/master')
@section('main_content')

<div class="container">
	<form class="form-horizontal" method="POST" action="/post">
	{{csrf_field()}}
  		<fieldset>
		    <legend>Create New Post</legend>
		    @if(Session::has('success'))
				<div class="alert alert-dismissible alert-warning">
				{{Session::get('success')}}
				</div>
 
			@endif
		    <div class="form-group">
		      <!-- <label for="banner" class="col-lg-2 control-label">Upload Banner</label>
		      <div class="col-lg-10">
		         <input type="file" name="banner" id="banner">
		      </div> -->
		    </div>
		    <div class="form-group">
		      <label for="title" class="col-lg-2 control-label">Post Title</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="title" name="title">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="body" class="col-lg-2 control-label">Post Content</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" id="body" name="body"></textarea>
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		       <button type="submit" class="btn btn-primary">Submit</button>
		        <button type="reset" class="btn btn-default">Cancel</button>
		      </div>
		    </div>
	  	</fieldset>
  	</form>
</div>

@endsection