<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colorama Online</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  {{ HTML::style('css/normalize.css') }}
  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/user_styles.css') }}
  {{ HTML::style('js/jquery/jquery-ui.css') }}
  {{ HTML::style('css/foundation-icons.css') }}

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/modernizr.js"></script>

</head>
<body>


<!-- Start Top Bar -->
  <div class="contain-to-grid fixed">
    <nav class="top-bar">
        <ul class="title-area">
          <li class="name">
            <h1>
              <a href="#">Colorama Online - Dashboard</a>
            </h1>
          </li>
          
          <li class="toggle-topbar menu-icon">
            <a href=""><span>Menu</span></a>
          </li>
        
        </ul>
      
      <section class="top-bar-section">
        <ul class="right">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#" data-dropdown="drop1">Help</a>
            <div id="drop1" data-dropdown-content class="f-dropdown content">
              <p>Start off by viewing the tutorial page <a href="#">here</a>. If your still
                 confused or cannot figure out what to do next, click <a href="#">here</a>
                 to contact customer service.</p>
            </div>
          </li>
          <li><a href="#">Sign Out</a></li>
        </ul>
      </section>
    </nav>
  </div>
<!-- End Top Bar -->
<div class="large-12 columns bar-push">
  @yield('content')
</div>

  {{HTML::script('js/vendor/jquery.js') }}
  {{HTML::script('js/foundation.min.js') }}
  {{HTML::script('js/jquery/jquery-ui.js')}}
  {{HTML::script('js/animation.js')}}
  <script>
    $(document).foundation();

    $(function() {
    $( "#datepicker" ).datepicker();
  });

  </script>
</body>
</html>