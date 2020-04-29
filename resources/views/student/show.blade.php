

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
                              
                                   <td>Name</td>
                                   <td>Roll</td>
                                   <td>Mobile</td>
                                   <td>Department</td>
                                   <td>Action</td>
                              
                              </tr>
        
                        </thead>


                     <tbody>
                            
                              <tr>
                                         <td>{{$data->name}}</td>
                                         <td>{{$data->roll}}</td>
                                         <td>{{$data->mobile}}</td>
                                         <td><{{$data->department}}></td>
                                       
                              </tr>
                 
                     </tbody>
                   
                   </table>

                   
        </div>

         

</body>
</html>