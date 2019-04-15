<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('resources/assets/admin/images/ios/fickle-logo-72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('resources/assets/admin/images/ios/fickle-logo-72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('resources/assets/admin/images/ios/fickle-logo-114.png')}}" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="{{asset('resources/assets/admin/images/ico/fab.ico')}}">

    <title>login </title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="{{asset('resources/assets/admin/css/rtl-css/plugins/pace-rtl.css')}}">
    <script src="{{asset('resources/assets/admin/js/pace.min.js')}}"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="{{asset('resources/assets/admin/css/bootstrap-rtl.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('resources/assets/admin/css/plugins/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/assets/admin/css/plugins/ladda-themeless.min.css')}}">

    <link href="{{asset('resources/assets/admin/css/plugins/humane_themes/bigbox.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/admin/css/plugins/humane_themes/libnotify.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/admin/css/plugins/humane_themes/jackedup.css')}}" rel="stylesheet">

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="{{asset('resources/assets/admin/css/rtl-css/style-rtl.css')}}" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="{{asset('resources/assets/admin/css/rtl-css/responsive-rtl.css')}}" rel="stylesheet">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-screen">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">
                        <div class="login-user-icon">
                            <i class="glyphicon glyphicon-user"></i>

                        </div>

                    </div>

                    <div class="login-form">
                        <form id="form-login" action="{{url('admin/login')}}" class="form-horizontal ls_form" method="post">
                            {{csrf_field()}}
                            <div class="input-group ls-group-input">
                                <input class="form-control" type="text" placeholder="Username" name="name">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>


                            </div>
                            @if (session()->get('username') )
                                <div class="alert alert-danger">
                                    <strong>{{session()->get('username')}}</strong>
                                </div>
                            @endif

                            <div class="input-group ls-group-input">

                                <input type="password" placeholder="Password" name="password"
                                       class="form-control" value="">

                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                            @if (session()->get('password') )
                                <div class="alert alert-danger">
                                    <strong>{{session()->get('password')}}</strong>
                                </div>
                            @endif
                            <div class="remember-me">
                                <input class="switchCheckBox" type="checkbox" checked data-size="mini"
                                       data-on-text="<i class='fa fa-check'><i>"
                                       data-off-text="<i class='fa fa-times'><i>">
                                <span>Remember me</span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down">
                                    <span class="ladda-label"><i class="fa fa-key"></i></span>
                                </button>

                                <a class="forgot-password" href="javascript:void(0)">Forgot password</a>
                            </div>
                        </form>
                    </div>
                    <div class="forgot-pass-box">
                        <form  class="form-horizontal ls_form"  method="POST" action="">
                            {{ csrf_field() }}

                            <div class="input-group ls-group-input">
                                <input class="form-control" type="text" placeholder="someone@mail.com"  name="email">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn col-md-12 col-sm-12 col-xs-12">
                                    <i class="fa fa-rocket"></i> Send
                                </button>

                                <a class="login-view" href="javascript:void(0)">Login</a>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <p class="copy-right big-screen hidden-xs hidden-sm">
        <span>&#169;</span> zedy <span class="footer-year">2019</span>
    </p>
</section>

</body>
<script src="{{asset('resources/assets/admin/js/lib/jquery-2.1.1.min.js')}}"></script>
<script src="{{asset('resources/assets/admin/js/lib/jquery.easing.js')}}"></script>
<script src="{{asset('resources/assets/admin/js/bootstrap-switch.min.js')}}"></script>
<!--Script for notification start-->
<script src="{{asset('resources/assets/admin/js/loader/spin.js')}}"></script>
<script src="{{asset('resources/assets/admin/js/loader/ladda.js')}}"></script>
<script src="{{asset('resources/assets/admin/js/humane.min.js')}}"></script>
<!--Script for notification end-->

<script src="{{asset('resources/assets/admin/js/pages/login.js')}}"></script>

</html>