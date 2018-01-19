<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/bootstrap.min.css?v=1') }}">

    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/font-awesome.css?v=1') }}">
    <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/style.css?v=1') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>
     <!-- Page Wrapper -->

    <!-- <div class="pageWrapper"  style="background:url(pexels-photo-574071.jpeg);background-repeat:no-repeat;background-position:top center;">-->
    <div class="pageWrapper"  style="background:url(images/pexels-photo-574071.jpeg);background-repeat:no-repeat;background-position:top center;background-size:1600px auto">
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
                    <form method="post">
                   
                    <input type="text" class="searchTextTop" name="search" placeholder="Search on Nexladder..." />
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
              <div class="logo">nexladder</div>
             </div>
         
            <div class="col-md-8">
              <!-- navigation -->


               @yield('nav')


              


              <!-- close navigation -->
            </div>  
            
           </div>

         </div>
         
         <div class="bodySearch">
              <div class="row">
              <div class="col-md-12">
                 <input type="text" class="bodySearchBox" name="search" placeholder="What do you want to learn?"><button class="magnifierBody"><i class="glyphicon glyphicon-search"></i></button>
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
               <!-- Course -->
                 <div class="courseContainer">
                   <div class="row">
                         <div class="col-md-12 col-sm-12"><div class="learnTechnologies"><h2>Learn Technologies</h2></div></div>
                   <div class="col-md-12 col-sm-12">
                          <div class="row margin15">
                          <div class="col-md-4 col-sm-4">
                            <div>
                            <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                              <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                              </span>
                              
                               <span class="coursename">Php</span>
                              </a>
                            </div>
                        
                        
                        </div>
                          <div class="col-md-4 col-sm-4">
                            <div>
                            <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                              <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                              </span>
                              
                               <span class="coursename">Html</span>
                              </a>
                            </div>
                        
                        </div>
                          <div class="col-md-4 col-sm-4">
                           <div>
                            <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                              <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                              </span>
                              
                               <span class="coursename">Javascript</span>
                              </a>
                            </div>
                        
                        </div>
                      </div>
                      
                      <div class="row margin15">
                          <div class="col-md-4 col-sm-4">
                           <div>
                            <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                              <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                              </span>
                              
                               <span class="coursename">Javascript</span>
                              </a>
                            </div>
                        </div>
                          <div class="col-md-4 col-sm-4">
                             <div>
                              <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                                <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                                </span>
                                
                                 <span class="coursename">Javascript</span>
                              </a>
                            </div>
                        
                        </div>
                          <div class="col-md-4 col-sm-4">
                             <div>
                            <a href="/graphic-design-for-beginners/" target="_self" class="merchandising-course-card--mask--22Fbx">
                              <span class="courseImg">
                                <img src="https://udemy-images.udemy.com/course/240x135/749542_4762_3.jpg" alt="Graphic Design Bootcamp" class="img-responsive">
                              </span>
                              
                               <span class="coursename">Javascript</span>
                              </a>
                            </div>
                        
                        </div>
                      </div>
                      
                   
                   </div>
                   
                   </div>
                 
                 
                 <div class="row">
                     <div class="col-md-4 col-sm-4 text-center">Ads 1</div>
                     <div class="col-md-4 col-sm-4 text-center">Ads 2</div>
                     <div class="col-md-4 col-sm-4 text-center">Ads 3</div>
                 </div>
                 
                 
                 <div class="row">
                   <div class="content about">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                   </div>
                </div>
        
                 
                 
                 
               </div>
               
               
             <!-- End -->
           </div>
           
           <div class="col-md-2 col-sm-2 text-center margin15">
               Ads
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



{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('css/app.css') }}">

  <meta name="description" content="{{ $info->meta_description }}">
  <meta name="keywords" content="{{ $info->meta_keywords }}">

  <style>
  ul {margin:0;padding:0}
  ul li {list-style-type: none;display: inline;padding:0 10px;color:#888;}
  body{font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;}
</style>
</head>
<body>

<div class="container">
  
     <div class="row">
        @yield('subjects')
     </div>


     <div class="row">
         <div class="col-md-3">
           @yield('topics')
         </div>
         <div class="col-md-7">
            @yield('content')
         </div>
     </div>

</div>

</body>
</html> --}}