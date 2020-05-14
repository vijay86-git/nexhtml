<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Web Development Tutorials | Nexladder</title>
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
  </head>
  <body>
    <!-- Page Wrapper -->
    <!-- <div class="pageWrapper"  style="background:url(images/pexels-photo-574071.jpeg);background-repeat:no-repeat;background-position:top center;background-size:1600px auto">-->
    <div class="pageWrapper" style="background:url(https://nexladder.com/images/banner.png);background-repeat:no-repeat;background-position:center center;">
      <!-- Container -->
      
      <div class="container">
        <!-- Top Bar -->
        <div class="topBar">
          <div class="row">
            <div class="col-md-6">
              <div class="social">
                <ul>
                  <li><a target="_blank" href="https://www.facebook.com/nexladder" title="facebook"><i class="fa fa-facebook homeclr" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href="https://twitter.com/nexladder" title="twitter"><i class="fa fa-twitter homeclr" aria-hidden="true"></i></a></li>
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
              <div class="logo"><a href="{{ URL('/') }}" title="nexladder"><img src="{{ Helper::loadAssetsFiles('images/nex_logo.png') }}" alt="nexladder" /></a></div>
            </div>
            <div class="col-md-9">
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
                      <li class="active"><a title="Home" href="{{ URL('/') }}"><i class="fa fa-home homeclr" aria-hidden="true"></i></a></li>
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
          <div class="col-md-9 col-sm-9">
            <div class="courseContainer">
              <div class="row">
                <div class="col-md-12 col-sm-12"><div class="learnTechnologies"><h2>Learn Technologies</h2></div></div>
                <div class="col-md-12 col-sm-12">
                  <div class="row margin15">
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="PHP" href="https://nexladder.com/php-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1521957999/l1nw9xrqc4wqzpw2m541.png" alt="PHP" class="img-responsive">
                          </span>
                          <span class="coursename">PHP</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="MySqli" href="https://nexladder.com/mysqli-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1521958020/j3xznpvxycqvs8xjhxhr.png" alt="MySqli" class="img-responsive">
                          </span>
                          <span class="coursename">MYSQLI</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Ajax" href="https://nexladder.com/ajax-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1523170378/ejodehv9fo7knxcjfjrc.png" alt="Ajax" class="img-responsive">
                          </span>
                          <span class="coursename">AJAX</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Html" href="https://nexladder.com/html-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1529155421/brokx6bezapfzjfg5lnh.png" alt="Html" class="img-responsive">
                          </span>
                          <span class="coursename">HTML</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Css" href="https://nexladder.com/css-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1531962655/tijfunf9qjythhurgter.png" alt="Css" class="img-responsive">
                          </span>
                          <span class="coursename">CSS</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="jquery" href="https://nexladder.com/jquery-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1527297788/k5kuhl7rf1nvmfbw2wo4.png" alt="Jquery" class="img-responsive">
                          </span>
                          <span class="coursename">JQUERY</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="VueJS" href="https://nexladder.com/vuejs-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1521958039/dyynuzbj9fr307wrsbem.png" alt="VueJS" class="img-responsive">
                          </span>
                          <span class="coursename">VUEJS</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Json" href="https://nexladder.com/json-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1522976065/hitwg7fxqqqoxklzmzbr.png" alt="Json" class="img-responsive">
                          </span>
                          <span class="coursename">JSON</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="PHP7" href="https://nexladder.com/php7-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1523758107/bs4f9u7ophsyydxfwxp3.png" alt="PHP7" class="img-responsive">
                          </span>
                          <span class="coursename">PHP7</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="CodeIgniter" href="https://nexladder.com/codeigniter-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1527297860/negbmle7fqbfgqrr8dhh.png" alt="CodeIgniter" class="img-responsive">
                          </span>
                          <span class="coursename">CODEIGNITER</span>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Laravel" href="https://nexladder.com/laravel-tutorial" class="">
                          <span class="courseImg">
                            <img src="https://res.cloudinary.com/dqekhps4b/image/upload/v1578241441/qpp4lt4ha50pdjqjb13s.png" alt="Laravel" class="img-responsive">
                          </span>
                          <span class="coursename">LARAVEL</span>
                        </a>
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-3">
                      <div>
                        <a title="Laravel" href="https://nexladder.com/reactjs-tutorial" class="">
                          <span class="courseImg">
                            <img style="border:1px solid #ccc" src="https://res.cloudinary.com/dqekhps4b/image/upload/v1589450005/v4vjffgk3ui25ptkdb9w.png" alt="Laravel" class="img-responsive">
                          </span>
                          <span class="coursename">REACTJS</span>
                        </a>
                      </div>
                    </div>


                    
                  </div>
                </div>
              </div>
              
              
              
              <div class="row">
                <div class="content about">
                  <p>nexladder.com is a learning online platform that helps anyone can learn Web Technologies. nexladder provides all web tutorials like Php, Mysqli, Vuejs, Html, Jquery etc in simple and easy steps starting from basic to advanced concepts with examples. nexladder helps students, developers and project manager where they can learn topics in easy and simple language with examples. To make our website better for you, we bring updates to the website regularly.</p>
                  <p><strong>Our mission</strong> - To help you learn the skills you need to achieve your goal.</p>
                </div>
              </div>
              <div class="row" style="height:20px"></div>
              
              <div class="row">
                <div class="col-md-5 col-sm-5 text-center">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- Ad 4 -->
                  <ins class="adsbygoogle"
                  style="display:inline-block;width:300px;height:250px"
                  data-ad-client="ca-pub-9716398444039739"
                  data-ad-slot="4680411731"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
                <div class="col-md-5 col-sm-5 text-center">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- Ad 5 -->
                  <ins class="adsbygoogle"
                  style="display:inline-block;width:300px;height:250px"
                  data-ad-client="ca-pub-9716398444039739"
                  data-ad-slot="9106262970"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-3 col-sm-3 margin15 pull-left">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnexladder&tabs&width=340&height=214&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=541506242974269" width="300" height="214" style="border:none;overflow:hidden;margin:10px 0 0 0" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Ad 2 -->
            <ins class="adsbygoogle"
            style="display:inline-block;width:270px;height:600px"
            data-ad-client="ca-pub-9716398444039739"
            data-ad-slot="6679889118"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div>
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
              <div class="copyright col-md-6">
                <p>&copy; {{ date('Y') }} All rights reserved.</p>
              </div>
              <div class="col-md-6 pull-right" style="text-align:right">
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