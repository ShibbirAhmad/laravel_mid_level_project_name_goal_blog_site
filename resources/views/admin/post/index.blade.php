@extends('admin.layout.master')

@section('content')

<a class="btn btn-inline btn-info m-2" href="{{route('post.create')}}">Add New Post</a>            
<table class="table table-bordered text-center ">
    <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th colspan="2">Action</th>
    </thead>
    <tbody>
            @foreach ($postData as $data)
            <tr>
                   <td>{{$data->id}}</td>
                   <td>{{$data->postTitle}}</td>
                   <td>{{$data->postStatus}}</td>
                   <td colspan="2">
                        <a href="{{route('post.show',$data->id)}}" style="" class="btn btn-primary ShowButton "><i class="fas fa-eye"></i></a>
                        <a href="{{route('post.edit',$data->id)}}" style="margin-right:40px;" class="btn btn-success EditButton "><i class="fas fa-edit"></i></a>
                  
                   <div style="margin-top:-37px; margin-left:95px" >
                       {!! Form::open(['method'=>'DELETE', 'route'=> ['post.destroy',$data->id ]] ) !!}
                        <button class="btnDelete btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                       {!! Form::close() !!}
                   </div> 
                
                </td>            
            </tr>

                
            @endforeach
    </tbody>
</table>





@endsection





@section('script')
          
       <script>


       </script>

@endsection