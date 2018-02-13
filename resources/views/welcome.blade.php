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

  <style>
.modal-body .form-horizontal .control-label {
  text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
  margin-left: 15px;
}
.modal-footer .btn{
  background-color: #004B9E;
}
input[type=text], select, textarea{
    width: 100%;
    padding: 0 12px 5px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
    height: 30px;
}

label {
    padding: 0 12px 5px 0;
    display: inline-block;
    font-size: 15px;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.col-30 {
    float: left;
    width: 30%;
    margin-top: 6px;
    padding-left: 10px;
}

.col-70 {
    float: left;
    width: 70%;
    margin-top: 6px;
    padding-right: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 700px) {
    .col-30, .col-70, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

  </style>
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

          <button type="button" class="btn btn-primary" autofocus="autofocus"><a href=""><i class="fa fa-facebook"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-twitter"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-youtube"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-instagram"></i></a></button>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>

      <div class="row top-product">
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>BRAND</h5>
            <a href="{{action('CategoryController@index')}}"><img src="/images/1.png"/></a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>PUBLIC FIGURE</h5>
              <a href="{{action('CategoryController@index')}}"><img src="/images/2.png"/></a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>ORGANIZATION</h5>
              <a href="{{action('CategoryController@index')}}"><img src="/images/3.png"/></a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-item centerBlock">
            <h5>MEDIA</h5>
              <a href="{{action('CategoryController@index')}}"><img src="/images/4.png"/></a>
          </div>
        </div>
      </div>

      <div class="row product1">
        <div class="col-sm-1">
            <a href="{{action('CategoryController@index')}}"><img src="/images/logo.jpg"/></a>
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
      <a href="" role="button" class="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
    </div>
  </section>

  <!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
    <div class="modal-body">
    <form action="">
    <div class="row">
      <div class="col-30">
        <label for="name">Name</label>
      </div>
      <div class="col-70">
        <input type="text" id="name" name="Name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-30">
        <label for="email">Email</label>
      </div>
      <div class="col-70">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div><br>

    <div class="row">
      <div class="col-30">
        <label for="company">Company Name</label>
      </div>
      <div class="col-70">
        <input type="text" id="company" name="company" placeholder="Your company name..">
      </div>
    </div>
    <div class="row">
      <div class="col-30">
        <label for="category">Category</label>
      </div>
      <div class="col-70">
        <select id="category" name="category">
          <option value="brand">Brand</option>
          <option value="publicfigure">Public Figure</option>
          <option value="organization">Oragnization</option>
          <option value="media">Media</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-30">
        <label for="subcategory">Sub category</label>
      </div>
      <div class="col-70">
        <select id="subcategory" name="subcategory">
          <option value="brand">Brand</option>
          <option value="publicfigure">Public Figure</option>
          <option value="organization">Oragnization</option>
          <option value="media">Media</option>
        </select>
      </div>
    </div>

  </form>
  </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

  <section class="contact" id="contact">
    <div class="row">
    <div class="col-sm-4 text-center">
      <span>Contact us :</span><br><br>
      <span class="bold">customer@nolimit.id</span>
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
      <span>Our websites:</span><br><br>
      <a href="https://www.nolimit.id/" target="_blank"><span class="bold">www.nolimit.id</span></a>
    </div>
  </div>
  </section>

  <footer>
    <div class="container">
      <p>Copyright &copy; 2017 indsight. All screenshoots &copy; their respective owners</p>
    </div>
  </footer>
  <script>
  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
</script>
</body>
</html>
