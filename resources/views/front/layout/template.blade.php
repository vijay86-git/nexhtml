<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $info->page_title }}</title>
    @php
      $style_file_path = $_SERVER['DOCUMENT_ROOT'] . '/build/assets/css/style.css';
      $ftime           = filemtime($style_file_path);
    @endphp
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/bootstrap.min.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/font-awesome.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/style.css') }}?v={{ $ftime }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="msvalidate.01" content="F13063B8299624F18B7C4E98367AE3E1" />
    <meta name="description" content="{{ $info->meta_description }}" />
    <meta name="keywords" content="{{ $info->meta_keywords }}" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta property="og:image" content="{{ Helper::loadAssetsFiles('/images/nexsharelogo.png') }}" />
    <meta property="og:title" content="{{ $info->page_title }}" />
    <meta property="og:description" content="{{ $info->meta_description }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ URL::to('/') }}" />
    <meta name="twitter:title" property="og:title" content="{{ $info->page_title }}" />
    <meta name="twitter:description" property="og:description" content="{{ $info->meta_description }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:domain" content="{{ URL::to('/') }}" />
    <meta name="twitter:creator" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:image" content="{{ Helper::loadAssetsFiles('images/nexsharelogo.png') }}" />

    @yield('css')

    @yield('javascript')

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111558941-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-111558941-1');
        </script>

    @stack('js')

  </head>
  <body>
    
     <!-- Page Wrapper -->
    <div class="pageWrapper inner">
       <!-- Container -->
        <div class="container height200">
           <!-- Top Bar -->
           <div class="topBar">
               <div class="row">
                <div class="col-md-6">
                 <div class="socialinner">
                  <ul>
                     <li><a href="https://www.facebook.com/nexladder" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="https://twitter.com/nexladder" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.nexladder.nexladderwebtutorials" title="Download App"><img width="120" src="{{ Helper::loadAssetsFiles('images/android_google_play.png') }}" alt="" /></a></li>
                  </ul>
               </div>
              </div>
              <div class="col-md-6">
                 <div class="searchbar text-right">
                   <!-- form search -->

                    <form method="get" action="https://www.google.com/search" target="_blank"> 
                       <input autocomplete="off" type="text" class="searchTextTop" name="q" placeholder="Search on Nexladder..." title="Search on Nexladder" /><button class="magnifier"><i class="fa fa-search"></i></button>
                       <input type="hidden" name="sitesearch" value="https://nexladder.com" />
                     </form>

                   <!-- close -->
                  </div>
              </div>
             </div>
             <div class="seperator">&nbsp;</div>
          </div>
         <!-- Close -->
         <!-- Header part -->
         <div class="headerSection">
           <div class="row">
             <div class="col-md-3">
                 <div class="sitelogo"><a href="{{ URL('/') }}" title="nexladder"><img src="{{ Helper::loadAssetsFiles('images/nexlogo.png') }}" alt="nexladder" /></a></div>
             </div>
             <div class="col-md-9">
               <!-- navigation -->
                 <nav class="navbar navbar-inverse-inner">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span> 
                      </button>
                      <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navBar">
                      <ul class="nav navbar-nav">
                        <li class="{{ (Request::segment(1) == '') ? 'active' : '' }}"><a title="Home" href="{{ URL('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        @foreach($subjects as $sub_data)
                         <li class="{{ (Request::segment(1) == $sub_data->slug) ? 'active' : '' }}"><a title="{{ $sub_data->name }}" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </nav>
               <!-- close navigation -->
            </div>
           </div>
         </div>
         <!-- close body part -->
        </div> 
       <!-- End Container -->
    </div>
    <div class="container">
       <div class="bodyPart">
           @yield('content')
       </div>
   </div>
    
    <div class="footer marginTop40">
        <div class="container">

        <!--/ row -->
        <div class="row">
          <div class="col-md-12">
            <div class="bottom clearfix">
              <!-- social-icons -->
              <!--/ social-icons -->
              <!-- copyright -->
              <div class="copyright col-md-5">
                <p>&copy; {{ date('Y') }} All rights reserved.</p>
              </div>

              <div class="col-md-7 pull-right" style="text-align:right">
                <a title="Home" href="{{ route('home') }}">Home</a>&nbsp;|&nbsp;<a title="About" href="{{ route('about') }}">About</a>&nbsp;|&nbsp;<a title="Disclaimer" href="{{ route('disclaimer') }}">Disclaimer</a>&nbsp;|&nbsp;<a title="Contact Us" href="{{ route('contactus') }}">Contact Us</a>&nbsp;|&nbsp;<a title="Sitemap" href="{{ route('sitemap') }}">Sitemap</a>&nbsp;|&nbsp;<a title="Blog" href="/blog">Blog</a>
              </div>

              <!--/ copyright -->
            </div>
            <!--/ bottom -->
          </div>
        <!--/ col-sm-12 -->
      </div>
        <!--/ row -->
    </div>
  </div>
    <!-- End Wrapper -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ Helper::loadAssetsFiles('build/assets/js/jquery-3.2.1.min.js?v=1') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ Helper::loadAssetsFiles('build/assets/js/bootstrap.min.js?v=1') }}"></script>
  </body>
</html>