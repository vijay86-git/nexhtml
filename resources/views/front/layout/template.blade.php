<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $info->page_title }}</title>
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/bootstrap.min.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/font-awesome.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('build/assets/css/style.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="description" content="{{ $info->meta_description }}" />
    <meta name="keywords" content="{{ $info->meta_keywords }}" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta property="og:image" content="{{ Helper::loadAssetsFiles('build/assets/images/logo.png') }}" />
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
    <meta name="twitter:image" content="{{ Helper::loadAssetsFiles('build/assets/images/logo.png') }}" />
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
                     <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
              </div>
              <div class="col-md-6">
                 <div class="searchbar text-right">
                   <!-- form search -->
                    <form method="post">
                       <input type="text" class="searchTextTop innerTxtSrch" name="search" placeholder="Search on Nexladder..." />
                       <button class="magnifier"><i class="fa fa-search"></i></button>
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
             <div class="col-md-2">
                 <div class="sitelogo"><a href="{{ URL('/') }}" title="Nexladder">nexladder</a></div>
             </div>
             <div class="col-md-10">
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
                        <li class="{{ (Request::segment(2) == '') ? 'active' : '' }}"><a title="Home" href="{{ URL('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        @foreach($subjects as $sub_data)
                         <li class="{{ (Request::segment(2) == $sub_data->slug) ? 'active' : '' }}"><a title="{{ $sub_data->name }}" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
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
          <div class="row">
            <div class="col-md-3">
               @yield('topics')
           </div>
           <div class="col-md-9">
              <!-- content -->
            <div class="row mrgnbtm15">
             <div class="col-md-12">
                @yield('topiccontentheader')
             </div> 
            </div>
             
           <div class="row">
             <div class="col-md-12">
               @yield('content')
             
              <div class="content">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
              </div>
            
             <div class="content">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
            </div>
            
             <div class="content">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
             </div>
             
             <div class="content padn">
             
              <pre class="lang-php prettyprint prettyprinted" style=""><code><span class="kwd">namespace</span><span class="pln"> </span><span class="typ">App</span><span class="pln">\Http\Middleware</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">use</span><span class="pln"> </span><span class="typ">App</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Closure</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Illuminate</span><span class="pln">\Support\Facades\Auth</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">SetApplicationLanguage</span><span class="pln">
</span><span class="pun">{</span><span class="pln">

    </span><span class="com">/**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request            
     * @param \Closure $next            
     * @return mixed
     */</span><span class="pln">
    </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> handle</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Closure</span><span class="pln"> $next</span><span class="pun">)</span><span class="pln">
    </span><span class="pun">{</span><span class="pln">
        </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">isset</span><span class="pun">(</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">user</span><span class="pun">()-></span><span class="pln">locale</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">App</span><span class="pun">::</span><span class="pln">setLocale</span><span class="pun">(</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">user</span><span class="pun">()-></span><span class="pln">locale</span><span class="pun">);</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">

        </span><span class="kwd">return</span><span class="pln"> $next</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">);</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></code></pre>
             
             </div>
             
             
             <div class="content">
                 <h1 class="h1">PHP Features</h1>
               
               <ul class="points">
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
               </ul>
             </div>
             
             
             <div class="content">
                 <h1 class="h1">PHP Features</h1>
               
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  </tr>
                  <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  </tr>
                  <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  </tr>
                </tbody>
                </table>
  
             </div>
             
             
             
             <div class="content">
                 <p><strong>Output:</strong></p>
               <div class="codeblock"><pre>Size is: Big
Size is: Medium
Size is: Short
</pre></div>
  
             </div>
             </div>
            </div>
            
            <div class="row">
               <div class="col-md-12">
                 <div class="col-md-6 col-sm-6 text-left pad0">
                    @if (!empty($nextprevarr['prevlink']))
                       <a title="{{ $nextprevarr['prevtopic'] }}" href="{{ $nextprevarr['prevlink'] }}" class="btn btn-default prev"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a><span class='nexprv'><a title="{{ $nextprevarr['prevtopic'] }}" href='{{ $nextprevarr["prevlink"] }}'>{{ $nextprevarr["prevtopic"] }}</a></span>
                    @endif
                 </div>
                 <div class="col-md-6 col-sm-6 text-right pad0">
                  @if (!empty($nextprevarr['nextlink']))
                     <span class='nexprv'><a title="{{ $nextprevarr['nexttopic'] }}" href='{{ $nextprevarr["nextlink"] }}'>{{ $nextprevarr["nexttopic"] }}</a></span><a title="{{ $nextprevarr['nexttopic'] }}" href="{{ $nextprevarr["nextlink"] }}" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                  @endif
                 </div>
             </div> 
          </div> 
          <!-- close  -->
        </div>         
       </div>
     </div>
   </div>
    
    <div class="footer marginTop40">
        <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h3 class="title m_title">LEARN TUTORIALS</h3>
              <div class="sbs">
                <ul class="menu">
                  <li><a href="/">Home</a></li>
                  <li><a href="about-us.php">About us</a></li>
                  <li><a href="our-team.php">Our team</a></li>
                  <li><a href="faq.php">F.A.Q</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h3 class="title m_title">LEARN TUTORIALS</h3>
              <div class="sbs">
                <ul class="menu">
                  <li><a href="/">Home</a></li>
                  <li><a href="about-us.php">About us</a></li>
                  <li><a href="our-team.php">Our team</a></li>
                  <li><a href="faq.php">F.A.Q</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h3 class="title m_title">GET IN TOUCH</h3>
              <div class="contact-details"><p><strong>T (212) 555 55 00</strong><br>
                Email: <a href="#">sales@yourwebsite.com</a></p>
                <p>Your Company LTD<br>
                Street nr 100, 4536534, Chicago, US</p>
                <p><a href="http://goo.gl/maps/1OhOu" target="_blank"><i class="icon-map-marker icon-white"></i> Open in Google Maps</a></p>
              </div>
            </div>
          </div>
      </div>
        <!--/ row -->
        <div class="row">
          <div class="col-md-12">
            <div class="bottom clearfix">
              <!-- social-icons -->
              <!--/ social-icons -->
              <!-- copyright -->
              <div class="copyright">
                <p>&copy; 2018 All rights reserved.</p>
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