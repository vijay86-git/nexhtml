<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css?v=1" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/style.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  <link href="style.css?v=1" rel="stylesheet">

  </head>
  <body>
     <!-- Page Wrapper -->

    <!-- <div class="pageWrapper"  style="background:url(pexels-photo-574071.jpeg);background-repeat:no-repeat;background-position:top center;">-->
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
                    <button class="magnifier"><i class="glyphicon glyphicon-search"></i></button>
  
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
             <div class="col-md-4">
              <div class="logos">nexladder</div>
             </div>
         
            <div class="col-md-8">
              <!-- navigation -->
                 @yield('nav')
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
             
               <h1 class='headingtop'>{{$info->topic}}</h1>
               <div class="topnexprev">
                 
               <span class="share">
                 <label>share with:</label>
               
                 <a class="btn btn-social-icon btn-facebook" title="share with facebook">
                  <span class="fa fa-facebook"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-twitter" title="share with twitter">
                  <span class="fa fa-twitter"></span>
                 </a>
                 
                 <a class="btn btn-social-icon  btn-linkedin" title="share with twitter">
                  <span class="fa fa-linkedin"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-google" title="share with google+">
                  <span class="fa fa-google-plus"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-pinterest" title="share with pinterest">
                  <span class="fa fa-pinterest"></span>
                 </a>
        
               
               </span>
               
                  <a href="#" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
                  <a href="#" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
               </div>
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
                 <h1 class="h1">PHP Features</h2>
               
               <ul class="points">
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
                  <li><strong>Performance:</strong> Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.Script written in PHP executes much faster then</li>
               </ul>
             </div>
             
             
             <div class="content">
                 <h1 class="h1">PHP Features</h2>
               
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
                <a href="#" class="btn btn-default prev"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a><span class='nexprv'><a href='{{ url($prevlink) }}'>PHP Example</a></span>
               </div>
               <div class="col-md-6 col-sm-6 text-right pad0">
                <span class='nexprv'><a href='{{url($nextlink)}}'>PHP Associative Array</span></a><a href="#" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
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
          
          
          <!--/ col-sm-5 -->

          <!-- col-sm-4 -->

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
          <!--/ col-sm-3 -->
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
    <script src="{{ Helper::loadAssetsFiles('js/jquery-3.2.1.min.js?v=1') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ Helper::loadAssetsFiles('js/bootstrap.min.js?v=1') }}"></script>
  </body>
</html>




{{--
@extends('front.layout.master')

 
</style>

@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop


@section('topics')

@if (count($section) > 0)
@foreach($section as $sec_data)
<h1 style="">{{ $sec_data->section}}</h1>
<ul>
@foreach (App\Section::find($sec_data->id)->topics as $data)
      <li style="color:#ffffff;display:block;"><a href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
@endforeach

</ul>

@endforeach

@endif



@stop

@section('content')

@if(isset($info)):
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Topics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               {!!html_entity_decode($info->detail)!!}

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">

         <div class="col-xs-12 text-left">{{ $prevlink }}</div>

         <div class="col-xs-12 text-right">{{ $nextlink }}</div>
      </div>


    </section>
@endif
@stop

--}}