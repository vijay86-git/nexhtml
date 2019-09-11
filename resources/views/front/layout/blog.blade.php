<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blog - nexladder web tutorials</title>
      <!-- This site is optimized with the Yoast SEO plugin v7.8 - https://yoast.com/wordpress/plugins/seo/ -->
      <!-- / Yoast SEO plugin. -->
      <style type="text/css">

         @font-face {
              font-family: 'Open Sans';
              font-style: normal;
              font-weight: 400;
              src: url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.eot'); /* IE9 Compat Modes */
              src: local('Open Sans Regular'), local('OpenSans-Regular'),
                  url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
                  url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
                  url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.woff') format('woff'), /* Modern Browsers */
                  url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
                  url('https://nexladder.com/fonts/webfont/open-sans-v15-latin-regular.svg#OpenSans') format('svg'); /* Legacy iOS */
            }

         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
         .entry-title{font-size:20px !important;font-weight::bold !important}
         code{font-size:14px !important;}
      </style>
     
      <link rel='stylesheet' id='llorix-one-lite-bootstrap-style-css'  href='https://nexladder.com/blog/wp-content/themes/llorix-one-lite/css/bootstrap.min.css?ver=3.3.1' type='text/css' media='all' />
     
      <link rel='stylesheet' id='llorix-one-lite-style-css'  href='https://nexladder.com/blog/wp-content/themes/llorix-one-lite/style.css?ver=1.0.0' type='text/css' media='all' />
     
      <style id='llorix-one-lite-style-inline-css' type='text/css'>
         .overlay-layer-wrap{ background:rgba(13, 60, 85, 0.5);}.archive-top .section-overlay-layer{ background:rgba(33,242,158,0.6);}
      </style>
      <script type='text/javascript' src='https://nexladder.com/blog/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
      <script type='text/javascript' src='https://nexladder.com/blog/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
      <!--[if lt IE 9]>
      <script src="https://nexladder.com/blog/wp-content/themes/llorix-one-lite/js/html5shiv.min.js"></script>
      <![endif]-->
      <style type="text/css" id="syntaxhighlighteranchor"></style>
   </head>
   <body  class="post-template-default single single-post postid-188 single-format-standard" dir="ltr">
      <div class="content-wrap">
         <div class="container">
            <div id="primary" class="content-area 
               col-md-8">
               <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
                  <article id="post-188" class="content-single-page post-188 post type-post status-publish format-standard hentry category-php">
                     <header class="entry-header single-header">
                        <h1 itemprop="headline" class="entry-title single-title">{{ $heading }}</h1>
                        <div class="colored-line-left"></div>
                     </header>
                     <!-- .entry-header -->
                     <div itemprop="text" class="entry-content">

                        @php
                         echo $content;
                        @endphp

                     </div>
                     <!-- .entry-content -->
                  </article>
                  <!-- #post-## -->
               </main>
               <!-- #main -->
            </div>
            <!-- #primary -->
         </div>
      </div>
      
   </body>
</html>


<!-- .content-wrap -->
      <script type='text/javascript' src='https://nexladder.com/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js?ver=3.0.9b'></script>
      <script type='text/javascript' src='https://nexladder.com/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shBrushPhp.js?ver=3.0.9b'></script>
      <script type='text/javascript'>
         (function(){
            var corecss = document.createElement('link');
            var themecss = document.createElement('link');
            var corecssurl = "https://nexladder.com/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shCore.css?ver=3.0.9b";
            if ( corecss.setAttribute ) {
                  corecss.setAttribute( "rel", "stylesheet" );
                  corecss.setAttribute( "type", "text/css" );
                  corecss.setAttribute( "href", corecssurl );
            } else {
                  corecss.rel = "stylesheet";
                  corecss.href = corecssurl;
            }
            document.getElementsByTagName("head")[0].insertBefore( corecss, document.getElementById("syntaxhighlighteranchor") );
            var themecssurl = "https://nexladder.com/blog/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shThemeDefault.css?ver=3.0.9b";
            if ( themecss.setAttribute ) {
                  themecss.setAttribute( "rel", "stylesheet" );
                  themecss.setAttribute( "type", "text/css" );
                  themecss.setAttribute( "href", themecssurl );
            } else {
                  themecss.rel = "stylesheet";
                  themecss.href = themecssurl;
            }
            //document.getElementById("syntaxhighlighteranchor").appendChild(themecss);
            document.getElementsByTagName("head")[0].insertBefore( themecss, document.getElementById("syntaxhighlighteranchor") );
         })();
         SyntaxHighlighter.config.strings.expandSource = '+ expand source';
         SyntaxHighlighter.config.strings.help = '?';
         SyntaxHighlighter.config.strings.alert = 'SyntaxHighlighter\n\n';
         SyntaxHighlighter.config.strings.noBrush = 'Can\'t find brush for: ';
         SyntaxHighlighter.config.strings.brushNotHtmlScript = 'Brush wasn\'t configured for html-script option: ';
         SyntaxHighlighter.defaults['pad-line-numbers'] = false;
         SyntaxHighlighter.defaults['toolbar'] = false;
         SyntaxHighlighter.all();
      </script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var screenReaderText = {"expand":"<span class=\"screen-reader-text\">expand child menu<\/span>","collapse":"<span class=\"screen-reader-text\">collapse child menu<\/span>"};
         /* ]]> */
      </script>
