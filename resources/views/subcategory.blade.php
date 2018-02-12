<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>indsight</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/subcategory.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
  <style>
  .modal-body .form-horizontal .col-sm-2,
  .modal-body .form-horizontal .col-sm-10 {
    width: 100%
  }

  .modal-body .form-horizontal .control-label {
    text-align: left;
  }
  .modal-body .form-horizontal .col-sm-offset-2 {
  margin-left: 15px;
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
        <div class="col-lg-3 branch">
            <a href="{{action('CategoryController@index')}}" role="button" class="button">Back to Brand</a>
        </div>
        <div class="col-lg-6 text-center cat">
          <div class="feature-item centerBlock">
            <img src="/images/sub-category.png"/>
            <h5>AIR ASIA</h5>
        </div>
        </div>
        <div class="col-lg-2 social">
          <div class="btn-group">
            <button type="button" class="btn btn-primary" autofocus="autofocus"><a href=""><i class="fa fa-facebook"></i></a></button>
              <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-twitter"></i></a></button>
              <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-youtube"></i></a></button>
              <button type="button" class="btn btn-primary"><a href=""><i class="fa fa-instagram"></i></a></button>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>

    <div class="row">

      <div class="box1 effect3">
        <h4>FOLLOWER GROWTH</h4>
       </div>

       <div class="box1 effect3">
         <h4>ENGAGEMENT RATE</h4>
        </div>

      <div class="box effect2">
        <h4>5 TOP PEOPLE</h4>
       </div>

       <div class="box effect2">
         <h4>WORDCLOUD</h4>
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

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputName3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        id="inputName3" placeholder="Name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control"
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPhone3" >Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="inputPhone3" placeholder="Phone"/>
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label"
                            for="inputCompany3" >Company</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control"
                              id="inputCompany3" placeholder="Company"/>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputCategory" >Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="inputCategory3" placeholder="Category"/>
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label"
                            for="inputSubcat3" >Sub Category</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control"
                              id="inputSubcat3" placeholder="Sub Category"/>
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
