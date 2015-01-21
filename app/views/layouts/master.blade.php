<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title') Laravel 4 - Tutorial @show
        </title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
        <!-- CSS are placed here -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Laravel</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </head>
    <body>
    <div style="padding: 40px 15px;">
        <!-- Container -->
        <div class="container">
            <!-- Content -->
            @yield('content')
        </div>
    </div>    
    <div class="footer">
      <div class="container">
        <p class="muted credit">Laravel 4  <a href="#">Footer</a></p>
      </div>
    </div>
    <!-- Javascripts
    ================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('scripts')   
    <!-- Javascript -->
    </body>
</html>