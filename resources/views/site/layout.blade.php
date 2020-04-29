<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel Blog</title>

    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>
    
       <div class="container-fluid bg-dark">

          <div class="container bg-light header_Section">
                 <h2 style="margin-top:20px;"><a style="text-decoration:none;" href="{{route('siteRoute')}}">My Laravel Blog</a> </h2>
          </div>

           <div class="container mt-3">
                <div class="row">

               {{-- //  this is content container part --}}
                    <div class="col-md-10 content_section">
                          {{-- //this is for success result    --}}
                          @if (Session::has('success'))
                            
                          <div class="alert alert-success">{{Session::get('success')}}</div>
                         
                          @endif

                        {{-- //this is for warning result --}}
                          @if (Session::has('warning'))
                          
                          <div class="alert alert-warning">{{Session::get('warning')}}</div>
                         
                          @endif


                          {{-- //display for all error result   --}}

                          @if (count($errors)> 0) 
                                 
                                 <ul class="list-group">
                                     
                                  @foreach ($errors->all() as $error)

                                   <li class="alert alert-warning list-group-item">{{$error}} </li> 
                                   
                                    @endforeach
                                     
                                 </ul>
                          @endif
                          
   
                         @yield('content')
                    </div>



                   {{-- // right sidebar part --}}
                    <div class="col-md-2 sidebar_section ">

                      <div class="panel panel-default bg-light text-center">
                        <div class="panel-heading">
                            <div class="panel-title"><h3>Category</h3></div>
                        </div>
                  
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach ($category as $item)
                            <li class="list-group-item"><a style="text-decoration:none;" href="{{route('categoryRoute',$item->id)}}">{{$item->categoryName}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    
                        @yield('sidebar')
                    </div>
                </div>
           </div>

       </div>








    <div class="footer bg-dark container-fluid text-center">
        <h3 style="color:#fff; ">copy right all reserved <?php echo date('Y'); ?> By shibbirit</h3>
</div>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('js/myScript.js')}}"></script>
@yield('script')
</body>
</html>