

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
        
                  <table class="table table-border">
                   
                        <thead>
                        
                              <tr>
                              
                                  
              {{ Form::open(['route' => 'addstudent']) }}

            
              {{  Form::label('name' , 'Name') }}

                {{  Form::text('name', '', ['class' => 'form-control', 'placeholder' => ' student name']) }}



             <label for="roll">Roll</label>

             {{  Form::number('roll', '', ['class' => 'form-control', 'placeholder' => 'student roll']) }}

            
            <label for="mobile">Mobile</label>

            {{ Form::text('mobile', '', array('class' => 'form-control', 'placeholder ' => 'student Mobile') )  }}
                
            

             
            <label for="mobile">Department</label>

            {{ Form::text('department', '', array('class' => 'form-control', 'placeholder ' => 'student dept') )  }}
                
                                 
                    
              <label for="button"></label>     

              {{ Form::submit('submit' , ['class' => 'btn-success '] )  }}
                
              
               {{ Form::close() }}
              
              
                              </tr>
        
                        </thead>


                     <tbody>
                           
            
                     </tbody>
                   
                   </table>

                   
        </div>

         

</body>
</html>

