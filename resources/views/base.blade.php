<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Link -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!-- Google Font -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><!-- Optional theme -->
        <link href="css/portfolio.css" rel="stylesheet"/><!-- My CSS -->

        <!-- Script -->
        <script type="text/javascript" src="//platform.linkedin.com/in.js">
          api_key:   78ib4822tfa2eq
          authorize: false
          onLoad: getProfileData
        </script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/portfolio.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified JavaScript -->

        <title>Sal's Portfolio</title>

    </head>
    <body>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-fixed-top navbar-default bg-faded">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#devSkills">Development Skills</a></li>
              <li><a href="#contactMe">Contact Me</a></li>
            </ul>
          </div>

        </div>
      </nav>

      
      <!-- Restrict main Body in a col-md-6 -->
      <div class="col-md-6 col-md-offset-3 center-middle">
        @yield('content')
      </div>

    </body>
</html>

@section('content')
  <div class="">
    Whatever
  </div>
@endsection
