@extends('layout.master')

@section('content')

	<header>
        <div class="bgMove"></div>
        <div class="container">
            <a id="logo" href="#"><i></i><h1>DRAGAND</h1></a>
            <div class="social">
                 <a class="twitter-follow-button" href="https://twitter.com/dragandwatch" data-show-count="false" data-lang="en">
                    Follow @dragandwatch
                </a>
                
                <a class="twitterBtn twitter-share-button" href="https://twitter.com/share" data-via="dragandwatch">
                    Tweet
                </a>
            </div>
            <div class="description">
                <h1>Get a new Super Power!</h1>
                <p>A quick and simple application to download subtitles of your favorite series.</p>
                <a href="http://dragand.watch/download/1.0.0/Dragand_Mac_1.0.0.zip" class="downloadBtn getMacApp">
                    <i class="icon-apple"></i>
                    <div class="downloadBtnContent">
                        <span class="get">Get the Mac app</span>
                        <span class="version">Version 1.0.0</span>
                    </div>
                </a>
                <a class="downloadBtn getWinApp">
                    <i class="icon-windows8"></i>
                    <div class="downloadBtnContent">
                        <span class="get">Get the Windows app</span>
                        <span class="version">Coming soon ;)</span>
                    </div>
                </a>
            </div>
            <img id="appScreen" src="assets/images/appScreen.png" alt="DragAnd App home page">
            <svg id="scrollIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="38 48 39 25" enable-background="new 38 48 39 25" xml:space="preserve">
                <g>
                    <path fill="#FFFFFF" d="M74,54.8c0.7-0.7,0.7-1.9,0-2.6c-0.7-0.7-1.9-0.7-2.6,0L57.7,65.8L44,52.1c-0.7-0.7-1.9-0.7-2.6,0
                        c-0.4,0.4-0.5,0.8-0.5,1.3s0.2,0.9,0.5,1.3l15,15c0.7,0.7,1.9,0.7,2.6,0L74,54.8z"></path>
                </g>
            </svg>
        </div>
    </header>
    
	@include('modules.features')
	@include('modules.api')
	@include('modules.joinTheLeague')
	@include('modules.getTheApp')
 
@stop