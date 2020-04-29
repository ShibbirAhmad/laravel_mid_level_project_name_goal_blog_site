@extends('site.layout')


@section('content')

<div class="container  bg-light ">


    <div class="panel panel-default  ">
        <div class="panel-heading">
            <div class="panel-title"><h3>Latest Post</h3></div>
        </div>
        
        @foreach ($data as $post)
        <div class="media mb-4">
        
            <a class="media-left" href="{{route('singlePost',$post->id)}}">
                <img src="{{asset('admin/image/'.$post->postImage)}}" alt="post image" style="width:100px; height:130px; border:1 px #ddd;border-radius:10px" />
            </a>

            <div class="media-body ml-3">
                <h4 class="media-heading"> <a href="{{route('singlePost',$post->id)}}" style="text-decoration:none;" >{!! $post->postTitle  !!} </a> </h4>
                   {{  str_limit($post->postDescription,400) }}
            </div>
    
        </div>
          
        @endforeach
     
    </div>



            <div class="pagination ml-5 pl-5  "> {!!  $data->render();  !!} </div>



</div>
       
    
@endsection


{{-- //this is sidebar area --}}
@section('sidebar')
        




@endsection




@section('script')
    
@endsection