@extends('site.layout')


@section('content')

<div class="container  bg-light ">

  <article>
     
    <div class="panel panel-default  ">
        <div class="panel-heading">
            <div class="panel-title  "><h3> </h3></div>
        </div>
  

        <div class="media mb-4">
            <div class="media-body ml-3">
                <h4 class="media-heading"> {!! $post->postTitle  !!} </h4>

                    <p> posted on: {!! date('d-m-Y',strtotime($post->postDate));  !!} </p>
                    <p>category in:{!!  $post->category->categoryName !!} </p>

                      <div class="single_image ml-5 mb-2 pl-5">
                        <img src="{{asset('admin/image/'.$post->postImage)}}" alt="post image"
                         style="max-width:700px; border:1 px #ddd;border-radius:10px" />
                      </div>

                     <p>{!! $post->postDescription !!}</p>

            </div>
    
        </div>

        
    </div>

  </article>

    







</div>
       
    
@endsection


{{-- //this is sidebar area --}}
@section('sidebar')
        




@endsection




@section('script')
    
@endsection