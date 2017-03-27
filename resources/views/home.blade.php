@extends('partials/master')

@section('main_content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                    

                <div class="panel-body text-center">
                    <ul>
                        <li><img src="/avatar/{{Auth::user()->avatar}}">
                            <form enctype="multipart/form-data" method="POST" action="/home">
                               {{csrf_field()}}
                                <label>Update Profile Image</label>
                                <input type="file" name="avatar"></input>
                                <input type="submit" class=
                                "pull-right btn btn-sm btn-default" name="submit"></input>
                            </form>
                        </li>
                        <li><h3>Name:</h3> {{ Auth::user()->name }}</li>
                        <li><h3>Email:</h3> {{ Auth::user()->email }}</li>
                        
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

                      
                           
                                @foreach($posts as $post)
                                 <tr>
                                <td>
                                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                </td>
                                <td>
                                    {{$post->created_at}}
                                </td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit"><button type="submit" class="btn btn-warning">EDIT</button></a>
                                </td>
                                <td><a href="{{ route('post/delete',['post_id'=>$post->id]) }}"><button type="submit" class="btn btn-danger">DELETE</button></a>
                                </td>
                                </tr>
                                @endforeach
                         
                  </table>
                    
                </div>
            </div>






        </div>
    </div>
</div>
@endsection
