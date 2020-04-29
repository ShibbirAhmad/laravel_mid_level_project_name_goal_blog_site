<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <title>laravel my blog</title>
  
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <div class="container-fluid bg-dark ">
    <div class="container">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container bg-success">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Blog') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                               
                                    Dynamic Blog Site
                               
                        </ul>
                     
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                             
                            <a class="btn btn-success btn-inline" href="{{route('siteRoute')}}">visit site</a>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    
          
              
         
        </div>
        
    </div>

    {{-- div for sidebar and content --}}

    <div class="container">
        <div class="row">
            
        <div class="col-md-2 bg-primary sidebar">
            @include('admin/layout/sidebar')
        </div>
                       
                           
                           <div class="content  ">

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
