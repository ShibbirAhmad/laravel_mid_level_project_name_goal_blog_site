

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
        
        <div class="container">


  @if(Session::has('success'))
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('success')!!}
        </div>
    </div>

    @elseif(Session::has('error'))
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('error')!!}
        </div>
    </div>

    @elseif(Session::has('info'))
    <div class="col-md-12">
        <div class="alert alert-dark" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('info')!!}
        </div>
    </div>
    @endif





               
            @if($errors->any())
             
             <div class="alert alert-danger">
             
             <ul class="row-group">
               @foreach($errors->all() as $error)
                   <li class="row-item">{{ $error }}</li>
               @endforeach   
             </ul>
             
             </div>
                   
                  
            @endif



    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(300, function(){
                $(this).remove();
            });
        }, 4000);
    </script>

        
                  <table class="table table-border">
                   
                        <thead>
                        
                              <tr>
                              
                                   <td>Name</td>
                                   <td>Roll</td>
                                   <td>Mobile</td>
                                   <td>Department</td>
                                   <td>Action</td>
                              
                              </tr>
        
                        </thead>


                     <tbody>
                            @foreach($student as $data)   
                              <tr>
                                         <td>{{$data->name}}</td>
                                         <td>{{$data->roll}}</td>
                                         <td>{{$data->mobile}}</td>
                                         <td>{{$data->department}}</td>
                                         <td> <a href="{{route('student.show' ,$data->id )}}">Show</a> ||
                                     
                                          <a href="{{url('/student/edit' ,$data->id )}}">Edit</a>
                                          
                                          {{ Form::open( ['method' =>'DELETE' ,'route' => ['s.delete',$data->id]]) }}


                                          {{Form::submit('Delete' ,['class' => 'btn btn-danger']) }}
                                           
                                           
                                          {{Form::close()  }}
                                          </td>
                              </tr>
                      @endforeach
                     </tbody>
                   
                   </table>

                   
        </div>

         

</body>
</html>