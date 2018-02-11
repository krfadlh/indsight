<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body id="page-top">
  <header class="masthead">
    <div class="container text-center">
      <div class="search">
        <form>
          <input type="text" name="search" placeholder="Search..">
        </form>
      </div>
    </div>
  </header>

  <section class="features" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 branch">
          <a href="/">Home</a>
          <span>&nbsp;>&nbsp;</span>
          <a href="category">Brand</a>
        </div>
        <div class="col-lg-6 text-center cat">
          <span>BRAND</span></br>
          <img src="/images/cat.png"/>
        </div>
        <div class="col-lg-2 social">
          <div class="btn-group">
            <button type="button" class="btn btn-primary" autofocus="autofocus"><i class="fa fa-facebook"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-youtube"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>

  <section class="graph" id="graph">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>

  <section class="offer" id="offer">
    <div class="container text-center">
      <span>Want to analyze more secrets about your brands within seconds?</span><br><br>
      <a role="button" class="button">MORE ANALYTIC</a>
    </div>
  </section>

  <section class="contact bg-primary" id="contact">
    <div class="container">
      <ul class="list-inline list-social">
        <li class="list-inline-item social-facebook">
          <a href="https://www.facebook.com/NoLimitID/"  target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item social-twitter">
          <a href="https://twitter.com/NoLimitID"  target="_blank">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-youtube">
          <a href="#"  target="_blank">
            <i class="fa fa-youtube"></i>
          </a>
        </li>
        <li class="list-inline-item social-instagram">
          <a href="https://www.instagram.com/nolimitid/" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>Copyright &copy; 2017 indsight. All screenshoots &copy; their respective owners</p>
    </div>
  </footer>
  <!-- <script src="{{asset('js/app.js')}}" ></script> -->
</body>
</html>
