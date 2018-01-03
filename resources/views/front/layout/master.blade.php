 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  ul {margin:0;padding:0}
  ul li {list-style-type: none;display: inline;padding:0 10px;color:#888;}
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
         <div class="col-md-6">
            @yield('content')
         </div>
     </div>

</div>

</body>
</html> 