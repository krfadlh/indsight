<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>indsight</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
</head>
<body id="page-top">
  <header class="masthead">
    <div class="logo-app text-center">
      <form id="demo-2">
        <input class="float-right" type="search" placeholder="Search">
      </form>
      <img class="logo-app" src="/images/logo-insight.png"/>
      <img class="logo-company float-left" src="/images/logo-company.png"/>
    </div>
  </header>

  <section class="features" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-1 v-center">
          <label>Sort by:</label>
        </div>
        <div class="col-lg-4">
          <form>
            <div class="form-group">
              <select class="form-control select-box">
                <option>Januari 2018</option>
                <option>Desember 2017</option>
                <option>November 2017</option>
                <option>Oktober 2017</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <form>
            <div class="form-group">
              <select class="form-control select-box">
                <option>Fastest Follower Growth</option>
                <option>Most Followed Account</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-lg-2">
          <div class="btn-group">
            <button type="button" class="btn btn-primary" autofocus="autofocus"><i class="fa fa-facebook"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-youtube"></i></button>
            <button type="button" class="btn btn-primary"><i class="fa fa-instagram"></i></button>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>

      <div class="row top-product">
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>BRAND</h5>
            <img src="/images/1.png"/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>PUBLIC FIGURE</h5>
            <img src="/images/2.png"/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>ORGANIZATION</h5>
            <img src="/images/3.png"/>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>MEDIA</h5>
            <img src="/images/4.png"/>
          </div>
        </div>
      </div>

      <div class="row product1">
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
      </div>


      <div class="row product">
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
      </div>


      <div class="row product">
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
      </div>


      <div class="row product">
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
      </div>


      <div class="row product">
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
        <div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div><div class="col-sm-1">
          <img src="/images/logo.jpg"/>
        </div>
        <div class="col-sm-2">
          <span class="product-title">Panasonic</span><br>
          <span class="product-growth">17.81%</span>
          <span class="product-amount">11.2k</span>
        </div>
      </div>

      <div class="row detail">
        <div class="col-sm-3 text-center">
          <a href="{{action('CategoryController@index')}}" role="button" class="button">see more</a>
        </div>
        <div class="col-sm-3 text-center">
          <a href="{{action('CategoryController@index')}}" role="button" class="button">see more</a>
        </div>
        <div class="col-sm-3 text-center">
          <a href="{{action('CategoryController@index')}}" role="button" class="button">see more</a>
        </div>
        <div class="col-sm-3 text-center">
          <a href="{{action('CategoryController@index')}}" role="button" class="button">see more</a>
        </div>
      </div>

    </div>
  </section>

  <section class="connect" id-"connect">
    <div class="text-center">
      <span>Can't find your brand here?</span><br><br>
      <a href="" role="button" class="button">CONNECT YOUR BRAND</a>
    </div>

  </section>

  <section class="contact" id="contact">
    <div class="row">
    <div class="col-sm-4 text-center">
      <span>Contact us :</span><br><br>
      <span class="bold">customen@nolimit.id</span>
    </div>
    <div class="col-sm-4 text-center">
      <div class="container">
        <ul class="list-inline list-social">
          <span>Follow us :</span><br><br>
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
    </div>
    <div class="col-sm-4 text-center">
      <span>Our websites ::</span><br><br>
      <span class="bold">www.nolimit.id</span>
    </div>
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
