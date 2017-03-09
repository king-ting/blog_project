@extends('partials/master')
@section('main_content')

     @include('partials/banner')

     
     <div class="album text-muted">
      <div class="container">
       <div class="row">

        
          
          @foreach ($posts as $post)
            @include('posts/index_posts')
          @endforeach
           </div>
          <a href="/all_post"><button class="btn btn-primary">Read More</button></a>
      </div>
    </div>
          
        
   
    
@endsection