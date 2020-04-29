@extends('admin.layout.master')


@section('content')


    <table class="table table-bordered text-center mt-2 ">
            <thead>
                    <th>ID</th>
                    <th>User</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
            </thead>
            <tbody>
                    @foreach ($comment as $data)
                    <tr>
                           <td>{{$data->id}}</td>
                           <td>{{$data->user->name}}</td>
                           <td>{{$data->comment}}</td>
                           <td>{{$data->status}}</td>
                           <td colspan="2">
                                <a href="#EditModal" data-toggle="modal" style="margin-right:40px;" class="btn btn-success EditButton "><i class="fas fa-edit"></i></a>
                          
                           <div style="margin-top:-37px; margin-left:50px" >
                               {!! Form::open(['method'=>'DELETE', 'route'=> ['comment.destroy',$data->id ]] ) !!}
                                <button class="btnDelete btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                               {!! Form::close() !!}
                           </div> 
                        
                        </td>            
                    </tr>

                        
                    @endforeach
            </tbody>
    </table>



 {{-- //modal for eidt form-data --}}

 <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['method'=>'PUT','class'=> 'EditForm']) !!}
               
               {!! Form::hidden('id','',['class' => 'form-control EditId']) !!}
               {!! Form::label('Comment Status') !!}
               {!! Form::select('status',getCommentStatusList(),'', ['class' => 'form-control EditComment']) !!}
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('update', ['class' => 'btn btn-warning']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div> 
</div>

 

@endsection


@section('script')

<script>

$(function(){
    
             $('.EditButton').click(function(){

                var id=$(this).parent().parent().find('td').eq(0).text();
                var comment=$(this).parent().parent().find('td').eq(3).text();
            
                $('.EditId').val(id);
                $('.EditComment').val(comment);
                $('.EditForm').attr('action','{{url('admin/comment')}}/'+id);

             }); 
});    
        
</script>


    
@endsection






