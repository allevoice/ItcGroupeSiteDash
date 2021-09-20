
<!--=====================================-->
<!--============ Navigation =============-->
<!--=====================================-->
<div class="greyBg header-con col-lg-12 col-md-12 col-sm-12 col-xs-12" id="headerCon">
    <div class="container">
        <div class="row">
            <aside class="header col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo pull-left">


                    <a href="">
                        <img src="assets/images/logo/logo.png" alt="logo" />
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
                                        <li class="active">
                                            <a href="{{route('home.'.app()->getLocale())}}">{{(__('link.home'))}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about.'.app()->getLocale())}}">About us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('services.'.app()->getLocale())}}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{route('projects.'.app()->getLocale())}}">Projects</a>
                                        </li>

                                        <li>
                                            <a href="{{route('blog.'.app()->getLocale())}}">{{__('link.blog')}}</a>
                                        </li>


                                        <li>
                                            <a href="{{route('contact.'.app()->getLocale())}}">Contact</a>
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


