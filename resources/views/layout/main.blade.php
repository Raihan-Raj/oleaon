<html>
    <head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    
    <script src=" {{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
   

    </head>


       
        

    <body>


    <header>

    @include('layout.header')
 
    </header>
            
          
    

    <main>

    @yield('content')


    </main>

   
   <footer>

      @include('layout.footer')

    </footer>
    
    </body>
                                                            
  </html>