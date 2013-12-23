<!doctype html>
<html lang="en">
<head>
    <title>Laravel - The PHP framework for web artisans.</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="iKreativ">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">

    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon.png?v=2">

    <!-- we're minifying and combining all our css -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- grab jquery from google cdn. fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/jquery.js"><\/script>')</script>

    <!-- prettyprint -->
    <script src="http://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <!-- load up our js -->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/application.js"></script>

    <!-- fonts -->
    <script src="http://use.edgefonts.net/source-sans-pro:n3,i3,n4,i4,n6,i6,n7,i7.js"></script>
    <script src="http://use.edgefonts.net/source-code-pro.js"></script>

    <!-- some conditionals for ie -->
    <!--[if IE]><link href="assets/css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- HTML5 elements in less than IE9, yes please! -->
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- If less than IE8 add some JS for the webfont icons -->
    <!--[if lt IE 8]><script src="assets/js/ie_font.js"></script><![endif]-->

    <!-- asynchronous google analytics. change UA-XXXXX-X to your site's ID -->
    <script>
        var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
        (function(d,t){
    		var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        	s.parentNode.insertBefore(g,s)
    	}(document,'script'));
    </script>
</head>

<body id="index" class="page {{ $pagevars->body_class }}">

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6 -->
	<!--[if lt IE 7]>
		<p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
	<![endif]-->

	<!-- wrapper -->
    <div id="wrapper">

    <!-- header -->
<header id="header" role="header">
    <div class="boxed">
    @section('header_boxed')
    @show
    </div>
</header>
<!-- /header -->

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="/"><img src="/assets/img/logo-head.png" alt="Laravel" /></a>
        </div>
        <ul>
            <li class="current-item"><a href="#">歡迎</a></li>
            <li><a href="/docs" title="Documentation">文件</a></li>
            <li><a target="_blank" href="http://laravel.com/api/4.1" title="Laravel Framework API">API</a></li>
            <li><a target="_blank" href="//github.com/laravel/laravel" title="Github">Github</a></li>
            <!--
            <li><a target="_blank" href="//fluxbb.farapp.us/" title="Laravel Forums">中文論壇</a></li>
            //-->
            <li><a target="_blank" href="//forums.laravel.io/" title="Laravel Forums">英文論壇</a></li>
            <!--
            <li><a target="_blank" href="//lararvel.farapp.us/" title="Laravel Forums">部落格</a></li>
            //-->
            <li><a target="_blank" href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
        </ul>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">
@section('content')
@show
</div>
<!-- /content -->

@yield('extra_footer')

<!-- footer -->
<footer id="foot" class="textcenter">
    <div class="boxed">
        <!-- nav -->
        <nav id="secondary">
            <div id="logo-foot">
	           <a href="/"><img src="/assets/img/logo-foot.png" alt="Laravel" /></a>
	        </div>
            <ul>
                <li class="current-item"><a href="#">歡迎</a></li>
                <li><a href="/docs" title="Documentation">文件</a></li>
                <li><a target="_blank" href="http://laravel.com/api/4.1" title="Laravel Framework API">API</a></li>
                <li><a target="_blank" href="//github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a target="_blank" href="//forums.laravel.io/" title="Laravel Forums">英文論壇</a></li>
                <li><a target="_blank" href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
            </ul>
        </nav>
        <!-- /nav -->
    </div>
</footer>
<!-- /footer -->

<!-- to the top -->
<div id="top">
    <a href="#index" title="Back to the top">
        <i class="icon-chevron-up"></i>
    </a>
</div>
<!-- /to the top -->

    </div>
    <!-- /wrapper -->

    <!-- copyright -->
    <section id="copyright" class="textcenter">
        <div class="boxed">
            <div class="animated slideInLeft">Copyright &copy; 2013 <a href="http://twitter.com/taylorotwell" title="Taylor Otwell" target="_blank">Taylor Otwell</a>. Website built with &hearts; <a href="//ikreativ.com" title="iKreativ" target="_blank">iKreativ</a>.</div>
        </div>
    </section>
    <!-- /copyright -->

</body>
</html>
