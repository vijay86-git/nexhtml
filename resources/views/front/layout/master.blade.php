 <!DOCTYPE html>
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
</html> 