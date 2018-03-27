<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nexladder Online Web Tutorials</title>
    @php
      $style_file_path = $_SERVER['DOCUMENT_ROOT'] . '/build/assets/css/style.css';
      $ftime           = filemtime($style_file_path);
    @endphp
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/bootstrap.min.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/font-awesome.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/style.css') }}?v={{ $ftime }}">
    <style>
    .navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-nav>li>a:hover  {color:#FFFFFF;font-size:14px;text-transform:uppercase}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="msvalidate.01" content="F13063B8299624F18B7C4E98367AE3E1" />
    <meta name="description" content="Free Online Tutorials, Tutorials Online, nexladder provides tutorials like php tutorial, ajax, mysql etc for beginners and professionals." />
    <meta name="keywords" content="nexladder, php tutorial, mysql tutorial and more for beginners and professionals" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta property="og:image" content="{{ Helper::loadAssetsFiles('/images/nexsharelogo.png') }}" />
    <meta property="og:title" content="Nexladder Online Web Tutorials" />
    <meta property="og:description" content="Free Online Tutorials, Tutorials Online, nexladder provides tutorials like php tutorial, ajax, mysql etc for beginners and professionals." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ URL::to('/') }}" />
    <meta name="twitter:title" property="og:title" content="Nexladder Online Web Tutorials" />
    <meta name="twitter:description" property="og:description" content="Free Online Tutorials, Tutorials Online, nexladder provides tutorials like php tutorial, ajax, mysql etc for beginners and professionals." />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:domain" content="{{ URL::to('/') }}" />
    <meta name="twitter:creator" content="{{ env('SOCIAL_SITE_NAME') }}" />
    <meta name="twitter:image" content="{{ Helper::loadAssetsFiles('images/nexsharelogo.png') }}" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111558941-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-111558941-1');
        </script>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9716398444039739",
            enable_page_level_ads: true
          });
        </script>


  </head>
  <body>
     <!-- Page Wrapper -->

    <!-- <div class="pageWrapper"  style="background:url(images/pexels-photo-574071.jpeg);background-repeat:no-repeat;background-position:top center;background-size:1600px auto">-->

      <div class="pageWrapper" style="background:url(https://nexladder.com/images/banner.jpg);background-repeat:no-repeat;background-position:top center;background-size:1600px auto;">


       <!-- Container -->
      
        <div class="container">
           <!-- Top Bar -->
           <div class="topBar">
               <div class="row">
                <div class="col-md-6">
                 <div class="social">
                  <ul>
                  <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
               </div>
              </div>
              
              <div class="col-md-6">
                 <div class="searchbar text-right">
                   <!-- form search -->
                    <!-- <form method="post">
                       <input type="text" class="searchTextTop" name="search" placeholder="Search on Nexladder..." />
                       <button class="magnifier"><i class="fa fa-search"></i></button>
                    </form>-->
                     <input type="text" class="searchTextTop" name="search" placeholder="Search on Nexladder..." />
                     <button class="magnifier"><i class="fa fa-search"></i></button>

                    
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
               <div class="col-md-4">
                 <div class="logo"><a href="{{ URL('/') }}" title="nexladder"><img width="130" src="{{ Helper::loadAssetsFiles('images/nexlogo.png') }}" alt="nexladder" /></a></div>
               </div>
            <div class="col-md-8">
              <!-- navigation -->
               <nav class="navbar navbar-inverse">
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
                             <li class="active"><a title="Home" href="{{ URL('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                              @foreach($subjects as $sub_data)
                               <li><a href="{{ route('topic', $sub_data->slug) }}">{{ ucfirst($sub_data->name) }}</a></li>
                              @endforeach
                        </ul>
                      </div>
                  </div>
                </nav>
              <!-- close navigation -->
            </div>  
           </div>
         </div>
         
         <div class="bodySearch">
              <div class="row">
              <div class="col-md-12">
                 <input type="text" class="bodySearchBox" name="search" placeholder="What do you want to learn?"><button class="magnifierBody"><i class="fa fa-search"></i></button>
              </div>
              <div class="col-md-12">
                 <p class="notice">Learn Online Free Tutorials &amp; Explore more</p>
              </div>
            </div>
           </div>
         <!-- close body part -->
        </div>
       <!-- End Container -->
    </div>
    
    <div class="noticeBar">
       <p>Online Courses - Learn Anything, On Your Schedule</p>
    </div>
    
    <div class="container">
          <div class="bodyPart">
          <div class="row">
           <div class="col-md-10 col-sm-10">

              <div class="courseContainer">
                   <div class="row">
                         <div class="col-md-12 col-sm-12"><div class="learnTechnologies"><h2>Learn Technologies</h2></div></div>
                         <div class="col-md-12 col-sm-12">
                           <div class="row margin15">

                              @foreach($subjects as $sub_info)
                               <div class="col-md-3 col-sm-3">
                                <div>
                                  <a title="{{ $sub_info->name }}" href="{{ route('topic', $sub_info->slug) }}" target="_self" class="">
                                    <span class="courseImg">
                                      <img src="{{ $sub_info->image }}" alt="{{ ucfirst($sub_info->name) }}" class="img-responsive">
                                    </span>
                                     <span class="coursename">{{ strtoupper($sub_info->name) }}</span>
                                    </a>
                                 </div>
                                </div>
                              @endforeach

                           </div>
                      </div>

                   </div>
                 
                  <div class="row">
                       <!--<div class="col-md-4 col-sm-4 text-center">Ads 1</div>
                       <div class="col-md-4 col-sm-4 text-center">Ads 2</div>
                       <div class="col-md-4 col-sm-4 text-center">Ads 3</div>-->
                  </div>
                 
                   <div class="row">
                     <div class="content about">
                         <p><strong>About Us</strong> - nexladder.com is a learning online platform that helps anyone can learn Web Technologies. nexladder provides all web tutorials like Php, Mysqli, Vuejs, Html, Jquery etc in simple and easy steps starting from basic to advanced concepts with examples. nexladder helps students, developers and project manager where they can learn topics in easy and simple language with examples. To make our website better for you, we bring updates to the website regularly.</p>

                         <p><strong>Our mission</strong> - To help you learn the skills you need to achieve your goal.</p>
                     </div>
                  </div>

               </div>
 
           </div>
           <div class="col-md-2 col-sm-2 text-center margin15">
               <!-- Ads -->
           </div>
        </div>
       </div>
    </div>
    
    <div class="footer marginTop40">
        <div class="container">
        <!--<div class="row">
          <div class="col-md-4">
            <div>
              <h3 class="title m_title">LEARN TUTORIALS</h3>
              <div class="sbs">
                <ul class="menu">
                  <li><a href="/">Home</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div>
              <h3 class="title m_title">LEARN TUTORIALS</h3>
              <div class="sbs">
                <ul class="menu">
                  <li><a href="https://nexladder.com/beta/php-tutorial">PHP</a></li>
                  <li><a href="https://nexladder.com/beta/mysqli-tutorial">MySQLi</a></li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div>
              <h3 class="title m_title">GET IN TOUCH</h3>
              <div class="contact-details"><p>
                Email: <a href="#">nexladderinfo@gmail.com</a></p>
                <p>nexladder<br></p>
                <p><a href="#" target="_blank"><i class="icon-map-marker icon-white"></i> Open in Google Maps</a></p>
              </div>
            </div>
          </div>

      </div>-->

        <!--/ row -->
        <div class="row">
          <div class="col-md-12">
            <div class="bottom clearfix">
              <!-- social-icons -->
              <!--/ social-icons -->
              <!-- copyright -->
              <div class="copyright">
                <p>&copy; {{ date('Y') }} All rights reserved.</p>
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