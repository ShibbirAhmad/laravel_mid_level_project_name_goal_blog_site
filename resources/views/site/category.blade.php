@extends('site.layout')


@section('content')

<div class="container  bg-light ">


    <div class="panel panel-default  ">
        <div class="panel-heading">
            <div class="panel-title"><h3>Latest Post</h3></div>
        </div>
  
        <div class="panel-body">
           
            @foreach ($data as $post)
       
            <h2><a href="{{route('singlePost',$post->id)}}"> {!! $post->postTitle  !!} </a></h2>
            <p>{{$post->postDescription}}</p>
           @endforeach
            
        </div>
    </div>



                <div class="pagination"> {!!  $data->render();  !!} </div>
   


</div>
       
    
@endsection


{{-- //this is sidebar area --}}
@section('sidebar')
        




@endsection




@section('script')
    
@endsection