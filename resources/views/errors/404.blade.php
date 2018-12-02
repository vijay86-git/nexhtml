<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page Not Found</title>
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
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="{{ Request::url() }}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111558941-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-111558941-1');
        </script>
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
                     <li><a href="https://plus.google.com/b/107873437441310283848" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
             <div class="col-md-12 text-center">
                 <div class="sitelogo"><a href="{{ URL('/') }}" title="nexladder"><img src="{{ Helper::loadAssetsFiles('images/nexsharelogo.png') }}" alt="nexladder" /></a></div>
             </div>
           </div>
         </div>
         <!-- close body part -->
        </div> 
       <!-- End Container -->
    </div>
    <div class="container">
       <div class="bodyPart" style="margin:90px 0">
           <h1 style="font-size:26px">This page isn't available</h1>
           <p>The link you followed may be broken, or the page may have been removed.</p>
           <br />
           <a href="{{ URL('/') }}" title="Back"><button class="btn btn-danger" style="padding:10 20px">Back</button></a>
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
                <p>&copy; {{ date('Y') }} All rights reserved. Developed by <a target="_blank" href="https://nexglobalinc.com/" title="nexglobalinc">nexgloalinc</a></p>
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