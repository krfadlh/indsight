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
        <div class="container h-100">

        </div>
      </header>

      <section class="features" id="features">
        <div class="container">

          <div class="row">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="feature-item">
                      <img src="/images/1.png"/>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="feature-item">
                      <img src="/images/1.png"/>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="feature-item">
                      <img src="/images/1.png"/>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="feature-item">
                      <img src="/images/1.png"/>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact bg-primary" id="contact">
        <div class="container">
          <ul class="list-inline list-social">
            <li class="list-inline-item social-facebook">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item social-twitter">
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item social-google-plus">
              <a href="#">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <li class="list-inline-item social-google-plus">
              <a href="#">
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
