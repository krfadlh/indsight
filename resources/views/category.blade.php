<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>indsight</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/category.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/w3.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/carousel.js')}}"></script>
  <script src = "https://code.highcharts.com/highcharts.js"></script>
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
        <div class="col-lg-4 branch text-center">
          <a href="{{action('HomeController@index')}}" role="button" class="button">&#8249; Back to Home</a>
        </div>
        <div class="col-lg-4 text-center">
          <div class="feature-item centerBlock">
            <a href="{{action('SubCategoryController@index')}}"><img src="/images/brand.png"/></a><span>BRAND</span>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="btn-group">
            <button type="button" class="btn btn-primary" autofocus="autofocus"><a href=""><i class="fa fa-facebook"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-twitter"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-youtube"></i></a></button>
            <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-instagram"></i></a></button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
          <div class="MultiCarousel-inner">
            <div class="item">
              <div class="w3-container">
                <div class="w3-card-4">
                  <header class="w3-container w3-blue">
                    <h4>FOOD & BEVERAGE</h4>
                  </header>
                  <div class="w3-container">
                    <p></p>
                    <p>Krispy Kreme<br>@krispykreme</p>
                  </div>
                  <footer class="w3-container w3-blue">
                    <h5>2.213 Talk | 50%</h5>
                  </footer>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="w3-container">
                <div class="w3-card-4">
                  <header class="w3-container w3-blue">
                    <h4>AIRLINES</h4>
                  </header>
                  <div class="w3-container">
                    <p></p>
                    <p>Air Asia<br>@airasiago</p>
                  </div>
                  <footer class="w3-container w3-blue">
                    <h5>2.213 Talk | 50%</h5>
                  </footer>
                </div>
              </div>
            </div><div class="item">
              <div class="w3-container">
                <div class="w3-card-4">
                  <header class="w3-container w3-blue">
                    <h4>ELECTRONIC</h4>
                  </header>
                  <div class="w3-container">
                    <p></p>
                    <p>Krispy Kreme<br>@krispy_kreme</p>
                  </div>
                  <footer class="w3-container w3-blue">
                    <h5>2.213 Talk | 50%</h5>
                  </footer>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="w3-container">
                <div class="w3-card-4">
                  <header class="w3-container w3-blue">
                    <h4>AUTOMOTIVE</h4>
                  </header>
                  <div class="w3-container">
                    <p></p>
                    <p>Krispy Kreme<br>@krispy_kreme</p>
                  </div>
                  <footer class="w3-container w3-blue">
                    <h5>2.213 Talk | 50%</h5>
                  </footer>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="w3-container">
                <div class="w3-card-4">
                  <header class="w3-container w3-blue">
                    <h4>FOOD & BEVERAGE</h4>
                  </header>
                  <div class="w3-container">
                    <p></p>
                    <p>Krispy Kreme<br>@krispy_kreme</p>
                  </div>
                  <footer class="w3-container w3-blue">
                    <h5>2.213 Talk | 50%</h5>
                  </footer>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary leftLst"><</button>
          <button class="btn btn-primary rightLst">></button>
        </div>
      </div>
    </div>
  </section>
  <section class="sub-category" id="sub-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center cat">
          <div class="feature-item centerBlock">
            <h5>TOP 5 AIRLINES</h5>
          </div>
        </div>

        <div class="flex-container">
          <div>
            <div class="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
            <div class="floating-box"><span>Air Asia</span></div>
          </div>
          <div>
            <div class="floating-box"><img src="/images/garuda.jpg" height="50px" width="60px"/></div>
            <div class="floating-box"><span>Garuda</span></div>
          </div>
          <div>
            <div class="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
            <div class="floating-box"><span>Air Asia</span></div>
          </div>
          <div>
            <div class="floating-box"><img src="/images/garuda.jpg" height="50px" width="60px"/></div>
            <div class="floating-box"><span>Garuda</span></div>
          </div>
          <div>
            <div class="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
            <div class="floating-box"><span>Air Asia</span></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="chart" id="chart">
    <div class="container">
      <div class="row">
        <div class="box1 effect3">
          <div id = "follower" style = "width: 100%; height: 300px;">
            <script>
            $(document).ready(function() {
              var chart = {
                type: 'line'
              };
              var title = {
                text: 'FOLLOWER GROWTH'
              };
              var subtitle = {
                text: ''
              };
              var xAxis = {
                categories: ['Januari', 'Febaruari', 'Maret', 'Maret', 'April'],
                title: {
                  text: null
                }
              };
              var yAxis = {
                min: 0,
                title: {
                  text: '',
                  align: 'high'
                },
                labels: {
                  overflow: 'justify'
                }
              };
              var tooltip = {
                valueSuffix: ' millions'
              };
              var plotOptions = {
                bar: {
                  dataLabels: {
                    enabled: true
                  }
                }
              };
              var legend = {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,

                backgroundColor: (
                  (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                  '#EAE9EE'),
                  shadow: true
                };
                var credits = {
                  enabled: false
                };
                var series = [
                  {
                    name: 'Air Asia',
                    data: [107, 31, 635, 203, 2]
                  },
                  {
                    name: 'Garuda',
                    data: [133, 156, 947, 408, 6]
                  },
                  {
                    name: 'Chatay',
                    data: [973, 914, 4054, 732, 34]
                  },
                  {
                    name: 'Qatar',
                    data: [100, 700, 560, 308, 5]
                  }
                ];

                var json = {};
                json.chart = chart;
                json.title = title;
                json.subtitle = subtitle;
                json.tooltip = tooltip;
                json.xAxis = xAxis;
                json.yAxis = yAxis;
                json.series = series;
                json.plotOptions = plotOptions;
                json.legend = legend;
                json.credits = credits;
                $('#follower').highcharts(json);
              });
              </script>
            </div>

          </div>

          <div class="box1 effect3">
            <div id = "engagement" style = "width: 100%; height: 300px;">
              <script>
              $(document).ready(function() {
                var chart = {
                  type: 'column'
                };
                var title = {
                  text: 'ENGAGEMENT RATE'
                };
                var subtitle = {
                  text: ''
                };
                var xAxis = {
                  categories: ['Januari', 'Febaruari', 'Maret', 'Maret', 'April'],
                  title: {
                    text: null
                  }
                };
                var yAxis = {
                  min: 0,
                  title: {
                    text: '',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                };
                var tooltip = {
                  valueSuffix: ' millions'
                };
                var plotOptions = {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  }
                };
                var legend = {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: -40,
                  y: 100,
                  floating: true,
                  borderWidth: 1,

                  backgroundColor: (
                    (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                    '#EAE9EE'),
                    shadow: true
                  };
                  var credits = {
                    enabled: false
                  };
                  var series = [
                    {
                      name: 'Air Asia',
                      data: [107, 31, 635, 203, 2]
                    },
                    {
                      name: 'Garuda',
                      data: [133, 156, 947, 408, 6]
                    },
                    {
                      name: 'Chatay',
                      data: [973, 914, 4054, 732, 34]
                    },
                    {
                      name: 'Qatar',
                      data: [100, 700, 560, 308, 5]
                    }
                  ];

                  var json = {};
                  json.chart = chart;
                  json.title = title;
                  json.subtitle = subtitle;
                  json.tooltip = tooltip;
                  json.xAxis = xAxis;
                  json.yAxis = yAxis;
                  json.series = series;
                  json.plotOptions = plotOptions;
                  json.legend = legend;
                  json.credits = credits;
                  $('#engagement').highcharts(json);
                });
                </script>
              </div>
            </div>

            <div class="box effect2">
              <img src="/images/top-people.png" style="width:100%; height:100%;"/>
            </div>

            <div class="box effect2">
              <img src="/images/wordcloud.png" style="width:100%; height:100%;"/>
            </div>
          </div>
        </div>
      </section>

      <section class="offer" id="offer">
        <div class="container text-center">
          <span>Want to analyze more secrets about your brands?</span><br><br>
          <img src="/images/message.png" height="40px" width="70px"/><br><br>
          <a href="http://nolimit.id/contact" role="button" class="button">CONTACT US</a>

        </div>

        <div class="container text-center">
          <span>Can't find your brand here?</span><br><br>
          <img src="/images/brand.png" height="50px" width="60px"/><br><br>
          <a role="button" class="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
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
          <form class="form-inline" onsubmit="openModal()" id="myForm">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

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
  <!-- <script src="{{asset('js/app.js')}}" ></script> -->
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
