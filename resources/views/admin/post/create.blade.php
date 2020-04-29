@extends('admin.layout.master')

@section('content')

    <div class="container-fluid mt-3">
        <div class="row">

            <div class="col-md-12">
                    
                  {!! Form::open(['route' =>[ 'post.store'],'files'=>'true']) !!}

                  <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'write post title']) !!}  
                  </div>
                    
                  <div class="form-group">
                    
                    {!! Form::label('Post Category') !!}
                    <select class="form-control" name="categoryId" id="">
                      <option value="">select category</option> 
                       @foreach ($categoryList as $item)
                        <option value="{{$item->id}}">{{$item->categoryName}}</option>
                        @endforeach
                       
                    </select>

                    </div>

                  <div class="form-group">
                    {!! Form::label('Post Description') !!}
                    {!! Form::textarea('description', '', ['class' => 'form-control' ,'placeholder'=>'write post description']) !!}  
                  </div>
               
                  <div class="form-group">
                    {!! Form::label('Post Image') !!}
                    {!! Form::file('featureImage', ['class'=> 'form-control']) !!}  
                  </div>
                
                  <div class="form-group">
                    {!! Form::label('Post Status') !!}
                    {!! Form::select('status',getPostStatusList(),'Published', ['class' => 'form-control']) !!}  
                  </div>
                
                  {!! Form::submit('Save', ['class' => 'btn btn-success']) !!} 
                 
                  {!! Form::close() !!}

            </div>
        </div>
    </div>


@endsection





@section('script')
          
       <script>


       </script>

@endsection