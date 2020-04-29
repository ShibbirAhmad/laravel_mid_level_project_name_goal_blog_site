@extends('admin.layout.master')


@section('content')



<a class="btn btn-primary m-2" data-toggle="modal" href="#addNewModal">Add New</a>
    <table class="table table-bordered text-center ">
            <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
            </thead>
            <tbody>
                    @foreach ($category as $data)
                    <tr>
                           <td>{{$data->id}}</td>
                           <td>{{$data->categoryName}}</td>
                           <td colspan="2">
                                <a href="#EditModal" data-toggle="modal" style="margin-right:40px;" class="btn btn-success EditButton "><i class="fas fa-edit"></i></a>
                          
                           <div style="margin-top:-37px; margin-left:50px" >
                               {!! Form::open(['method'=>'DELETE', 'route'=> ['category.destroy',$data->id ]] ) !!}
                                <button class="btnDelete btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                               {!! Form::close() !!}
                           </div> 
                        
                        </td>            
                    </tr>

                        
                    @endforeach
            </tbody>
    </table>


 {{-- //modal for input modal --}}


 <!-- Modal -->
 <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=> 'category.store']) !!}
        {!! Form::label('Category Name') !!}
        {!! Form::text('categoryName','', ['class' => 'form-control']) !!}
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>



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
        {!! Form::open(['method'=>'PUT','class'=>'EditForm']) !!}
               
               {!! Form::hidden('id','',['class' => 'form-control EditId']) !!}
               {!! Form::label('Category Name') !!}
               {!! Form::text('categoryName','', ['class' => 'form-control EditName']) !!}
       
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
                var name=$(this).parent().parent().find('td').eq(1).text();
            
                $('.EditId').val(id);
                $('.EditName').val(name);
                $('.EditForm').attr('action','{{url('admin/category')}}/'+id );

             }); 
});    
        
</script>


    
@endsection






