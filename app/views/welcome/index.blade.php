@extends('layouts.default')

@section('header_boxed')
        <!-- tagline -->
        <div id="tagline" class="animated bounceInUp">
            <h1>為網頁藝術家創造的 PHP 框架</h1>
            <h2>身為開發者的日子過得更簡單了。</h2>
        </div>
        <!-- /tagline -->

        <!-- callto action -->
        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">五分鐘快速導覽</a>
        </div>
        <!-- /callto action -->

        <!-- ui -->
        <div class="animated fadeIn" id="header_image" style="background: url(/assets/img/sublime.png) top center no-repeat;"></div>
        <!-- /ui -->
@stop

@section('content')
    <!-- page -->
    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="one_quarter">
                    <h2><i class="icon-random"></i> <a title="REST風格的路由" href="docs/routing">REST風格的路由</a></h2>
                    <p>透過簡單的閉包就能回應 HTTP 請求，它能更簡單的幫你快速開始構建非凡的應用程式</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-graph"></i> <a title="操控資料" href="docs/eloquent">操控資料</a></h2>
                    <p>Laravel 內建驚人的 Eloquent ORM 和強大的遷移系統。能夠完美的與 MySQL、Postgres、SQL Server 和 SQLite 協同工作。</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-pencil-alt"></i> <a title="優雅的模板引擎" href="docs/templates">優雅的模板引擎</a></h2>
                    <p>PHP 原生代碼或是輕量級的 Blade 模板引擎都能無縫屆接。Blade 提供了很強大的模板繼承孤能和極快的解析速度。相信你會愛上它。</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-time"></i> <a title="為明天做準備" href="docs/routing">為明天做準備</a></h2>
                    <p>建立龐大的企業應用或是簡單的 JSON API。建構強大的控制器或是簡潔的 REST 風格路由。Laravel 適用于所有規模的開發作業</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-cog"></i> <a title="可靠的基礎" href="http://www.symfony.com">可靠的基礎</a></h2>
                    <p>Laravel 是由數個 Symfony 元件所構建而成，讓你的應用擁有一個千錘百鍊且可靠的基石</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-star"></i> <a title="基於 Composer" href="http://getcomposer.org">基於 Composer</a></h2>
                    <p>Composer 是一套第三方套件的套件管理工具。能快速在 Packagist 上找到需要的套件。</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-group"></i> <a title="強大的社群" href="http://forums.laravel.io">強大的社群</a></h2>
                    <p>無論你是 PHP 新手或者是經驗豐富的架構師，你都能在社群內有所獲。你可以在 IRC 討論靈感，或者是在論壇提出問題。</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-wrench"></i> <a title="測試、重構" href="docs/testing">測試、重構</a></h2>
                    <p>Laravel 從開始就將測試作為重點功能。我們提供了靈活的 IoC 容器，集成了 PHPUnit 測試工具。不用擔心，這些都很容易。</p>
                </li>
            </ul>
        </article>
    </section>
    <!-- /page -->
@stop

@section('extra_footer')

<!-- quotes -->
<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel has changed my life. The best framework to quickly turn an idea into product.</p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel reignited my passion for code, reinforced my understanding of MVC, and made development fun again!</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel kept me from leaving PHP.</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel helped me stop reinventing the wheel!</p></div>
               <div class="person">Ryan McDonough</div>
           </li>
       </ul>
   </article>
</section>
<!-- /quotes -->
@stop
