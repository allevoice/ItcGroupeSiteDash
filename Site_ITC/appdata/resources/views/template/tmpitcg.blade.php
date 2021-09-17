<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
<!doctype html> 
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <title>>ITC Group || @yield('title') </title>         
        <link rel="icon" href="{{asset('assets/img/logo/favicon.png')}}" type="image/png"> 
        <link rel="stylesheet" href="{{asset('assets/css/all-stylesheets.css')}}" type="text/css" />        
    </head>     
    <body class="home-page"> 
    <!--Ocndition pour afficher le slideshow -->
        <!-- @--include('template.loading') -->

        @section('banner')
            @include('template.bannerview') 
        @show
    

    


        
        @include('template.menup')



        @yield('datacontent')


    @include('template.footerview')
        
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{asset('assets/js/jquery-1.12.3.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script> 
<!-- Counter --> 
<script src="{{asset('assets/js/counter/counter.j')}}s"></script> 
<!-- Owl Carousel --> 
<script src="{{asset('assets/owl-carousel/js/owl.carousel.js')}}"></script> 
<!-- LAZY EFFECTS Scripts --> 
<script type="text/javascript" src="{{asset('assets/js/jquery.unveilEffects.js')}}"></script> 
<!-- Custom Scripts --> 
<script src="{{asset('assets/js/custom.js')}}"></script>  
    </body>
</html>