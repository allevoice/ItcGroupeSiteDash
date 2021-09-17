<!--=====================================-->         
        <!--============ Navigation =============-->         
        <!--=====================================-->         
        <div class="greyBg header-con col-lg-12 col-md-12 col-sm-12 col-xs-12" id="headerCon"> 
            <div class="container"> 
                <div class="row"> 
                    <aside class="header col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <div class="logo pull-left">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" />
                            </a>
                        </div>                         
                        <div class="clearfix showmb"></div>                         
                        <nav class="navbar navbar-default pull-right"> 
                            <div class="container-fluid"> 
                                <div class="row"> 
                                    <!-- Brand and toggle get grouped for better mobile display -->                                     
                                    <div class="navbar-header"> 
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                                            <span class="sr-only">Toggle navigation</span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                        </button>                                         
                                        <!--navbar-header-->                                         
                                    </div>                                     
                                    <!-- Collect the nav links, forms, and other content for toggling -->                                     
                                    <div class="clearfix showmb"></div>                                     
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                                        <div class="row"> 
                                            <ul class="nav navbar-nav"> 
                                                <li class="{{request()->is('/') ? 'active' : ''}}">
                                                
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>                                                 
                                                <li class="{{request()->is('about') ? 'active' : ''}}">
                                                    <a href="{{url('/about')}}">About us</a>
                                                </li>                                                 
                                                <li class="{{request()->is('services') ? 'active' : ''}}">
                                                    <a href="{{url('/services')}}">Services</a>
                                                </li>                                                 
                                                <li class="{{request()->is('projects') ? 'active' : ''}}">
                                                    <a href="{{url('/projects')}}">Projects</a>
                                                </li>                                                 
                                                                                                                                     
                                                <li class="{{request()->is('contact') ? 'active' : ''}}">
                                                    <a href="{{url('/contact')}}">Contact</a>
                                                </li>                                                 
                                            </ul>                                             
                                            <!--row-->                                             
                                        </div>                                         
                                        <!--collapse-->                                         
                                    </div>                                     
                                    <!--row-->                                     
                                </div>                                 
                                <!--container-fluid-->                                 
                            </div>                             
                            <!--navbar-->                             
                        </nav>                         
                        <!--header-->                         
                    </aside>                     
                    <!--row-->                     
                </div>                 
                <!--container-->                 
            </div>             
            <!--greyBg-->             
        </div>         