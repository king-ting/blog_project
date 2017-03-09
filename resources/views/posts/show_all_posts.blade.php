@extends('partials/master')
@section('main_content')



<div class="container">

    <div class="row">
    <h3>Latest Post</h3>
    <hr>
    		@foreach ($posts as $post)
          @include('posts/posts')
        @endforeach
        
    </div><!-- /.row -->

</div><!-- /.container -->





@endsection
