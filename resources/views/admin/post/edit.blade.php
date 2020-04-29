@extends('admin.layout.master')

@section('content')

    <div class=" container-fluid mt-3">
        <div class="row">

            <div class="col-md-12">
                    
                  {!! Form::open([ 'method'=>'PUT', 'route' =>[ 'post.update',$data->id],'files'=>'true']) !!}

                  <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('title', $data->postTitle, ['class' => 'form-control']) !!}  
                  </div>
                    
                  <div class="form-group">
                    
                    {!! Form::label('Post Category') !!}
                    <select class="form-control" name="categoryId" id="">
                      @foreach ($categoryList as $item) 
                        <option @if ($data->category_id==$item->id)
                            selected="selected"
                        @endif
                        value="{{$item->id}}" > 
                             {{$item->categoryName}}
                           </option>
                        @endforeach
                       
                    </select>

                    </div>

                  <div class="form-group">
                    {!! Form::label('Post Description') !!}
                    {!! Form::textarea('description',$data->postDescription, ['class' => 'form-control']) !!}  
                  </div>
                  <div  >
                     <img class="postImage media-responsive" width="300px" height="350px" src="{{asset('admin/image/'.$data->postImage)}}" alt="">
                  </div>
                  <div class="form-group">
                    {!! Form::label('Post Image') !!}
                    {!! Form::file('featureImage', ['class'=> 'form-control']) !!}  
                  </div>
                
                  <div class="form-group">
                    {!! Form::label('Post Status') !!}
                    {!! Form::select('status',getPostStatusList(),$data->postStatus, ['class' => 'form-control']) !!}  
                  </div>
                
                  {!! Form::submit('Update', ['class' => 'btn btn-warning']) !!} 
                 
                  {!! Form::close() !!}

            </div>
        </div>
    </div>


@endsection





@section('script')
          
       <script>


       </script>

@endsection