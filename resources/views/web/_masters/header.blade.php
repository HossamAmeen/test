<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$title}} | {{$data['pref']->name}} </title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="{{URL::to('logo.png')}}" type="image/x-icon">
<link rel="icon" href="{{URL::to('logo.png')}}" type="image/x-icon">
<meta name="author" content="Zedy Digital Agency" />
<meta property="article:author" content="https://www.facebook.com/ZedyDigitalAgency" />
<meta name="description" content="{{$data['pref']->description}}" />


<link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('resources/assets/web/css/bootstrap-rtl.css')}}">
<link rel="stylesheet" href="{{asset('resources/assets/web/css/font-awesome.min.css')}}">


<!--	    animated.css-->
	    <link rel="stylesheet" href="{{asset('resources/assets/web/css/animate.css')}}">
	    
<!--        owl slider-->
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/web/css/owl.theme.default.min.css')}}">


<!--        our video popup-->
<link rel="stylesheet" href="{{asset('resources/assets/web/css/video.popup.css')}}">
<!--        fonts-->
<link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

<!--        our main style-->
<link rel="stylesheet" href="{{asset('resources/assets/web/css/style.css')}}">


<meta property="og:type"   content="website" />
<meta property="og:title"  content="{{$title}} | {{$data['pref']->name}}" />
<meta property="og:image"  content="{{URL::to('logo.png')}}" />
<meta property="og:description"  content="{{$data['pref']->description}}" />

<style>
    .bannercontainer {
        width:100%;
        position:relative;
        padding:0;
    }

    .banner{
        width:100%;
        position:relative;
    }
</style>