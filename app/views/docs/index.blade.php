@extends('layouts.default')

@section('header_boxed')
        <!-- tagline -->
        <div id="tagline">
            <h1>中文文件.</h1>
        </div>
        <!-- /tagline -->

        <!-- version -->
        <div id="version">
            <ul class="nolist">
                <li @if($docs_ver == 'dev') class="current" @endif><a href="/docs/dev" title="Dev">Dev</a></li>
                <li @if($docs_ver == '4.1') class="current" @endif><a href="/docs/4-1" title="4.1">4.1</a></li>
                <li @if($docs_ver == '4.0') class="current" @endif><a href="/docs/4-0" title="4.0">4.0</a></li>
            </ul>
        </div>
        <!-- /version -->
@stop

@section('content')
            <!-- docs -->
            <section id="documentation">
                <article class="boxed">
                @include('docs/sidebar')
                    <!-- docs content -->
                    <div id="docs-content">
                    {{ $docs_content }}
                    </div>
                    <!-- /docs content -->
                </article>
    	    </section>
    	    <!-- /docs -->
@stop

