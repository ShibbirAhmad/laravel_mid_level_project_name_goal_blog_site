@extends('site.layout')


@section('content')
<div class="container  bg-light ">
    <div class="row">
         <div class="col-md-10">
            <div class="panel mt-5 panel-default">
                <div class="panle-heading">
                    <div class="panle-title"><h4>your latest comment</h4></div>
                </div>
          
                <div class="panel-body">
                     <table class="table bg-success table-bordered">
                               @foreach ($comments as $comment)
                                   <tr>
                                       <td>{{$comment->comment}}</td>
                                       <td>{{$comment->status}}</td>
                                   </tr>
                               @endforeach
                     </table>
                </div>
            </div>
          
         </div>


         {{-- //this for user profile info --}}
         <div class="col-md-2">
          
            <div class="panel mt-4 text-center panel-default">
                <div class="panle-heading">
                    <div class="panle-title"><h5>user info</h5></div>
                </div>
            <div class="media mt-2 ">
                <div class="media-body ml-3">
                    <a class="media-heading">
                       <img src="" style="border-radius:10px;width:80px;height:80px;background:#ddd;">
                    </a>

                         Hello! {!! $comment->user->name !!} 
    
                </div>
               </div>
            </div>
         </div>


    </div>
 
</div>

@endsection


{{-- //this is sidebar area --}}





@section('script')
    
@endsection