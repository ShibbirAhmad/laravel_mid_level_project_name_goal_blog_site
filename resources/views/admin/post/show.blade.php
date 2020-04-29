@extends('admin.layout.master')

@section('content')

    <div class="bg-secondary container-fluid mt-3">
        <div class="row">

            <div class="col-md-12">
                    
                  {!! Form::open() !!}

                  <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('', $data->postTitle, ['class' => 'form-control']) !!}  
                  </div>
                    
                  <div class="form-group">
                    
                    {!! Form::label('Post Category') !!}
                    <select class="form-control" name="categoryId" id="">
                      @foreach ($categoryList as $item) 
                        <option
                        
                        @if ($data->category_id==$item->id)
                        selected="selected"
                       @endif
                        
                        value="{{$item->id}}"> 
                            
                             {{$item->categoryName}}
                           </option>
                        @endforeach
                       
                    </select>

                    </div>

                  <div class="form-group">
                    {!! Form::label('Post Description') !!}
                    {!! Form::textarea('',$data->postDescription, ['class' => 'form-control']) !!}  
                  </div>
               
                  <div class="form-group">
                    {!! Form::label('Post Image') !!}
                    {!! Form::file('', ['class'=> 'form-control']) !!}  
                  </div>
                
                  <div class="form-group">
                    {!! Form::label('Post Status') !!}
                    {!! Form::select('',getPostStatusList(),$data->postStatus, ['class' => 'form-control']) !!}  
                  </div>
                
                  <a class="btn btn-primary" href="{{url('admin/post')}}">Back</a>
                  {!! Form::close() !!}

            </div>
        </div>
    </div>


@endsection





@section('script')
          
       <script>


       </script>

@endsection