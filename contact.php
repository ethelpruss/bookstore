<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Custom css -->
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Contact form validation JavaScript -->
<script>
  function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.getElementById('status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.getElementById('status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.getElementById('status').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();

  }
</script>
</head>



<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Neptune</h1>
        <p class="lead">Books, audiobooks and e-books</p>
      </div>
    </div>
  </div>
</header>


<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#7f816f">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
<i class="fas fa-dove fa-2x" style="color:#6c5772"></i>
    </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sale.php">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ebooks.php">E-books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="audiobooks.php">Audiobooks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a class="navbar-brand" href="cart.php">
    <span class="fa-stack fa-sm">
        <i class="fa fa-square fa-stack-2x"style="color:#eeefea"></i>
        <i class="fa fa-shopping-cart fa-stack-1x" style="color:#6c5772"></i>
    </span>
    </a>
  </div>
</nav>

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-left my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-left w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>
    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" required class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-right">
                <a class="btn btn-outline-dark btn-lg" onclick="validateForm()">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>
</section>

<!--Section: Contact v.2-->

<footer class="jumbotron text-right" style="margin-bottom:0">

  <div class = "row text-center">
    <div class= "col-sm-4">
    </div>

    <div class= "col-sm-1">
    <span class="fa-stack fa-lg">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-map-marker-alt fa-stack-1x fa-inverse"></i>
    </span> 
      <p>San Francisco, CA 94126, USA</p>
    </div>
  
    <div class= "col-sm-1">
    <span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
</span> 
      <p>+ 01 234 567 89</p>
    </div>
    
  <div class= "col-sm-1">
  <span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
</span> 
    <p>contact@neptune.com</p>
  </div>
  </div>

</footer>
</body>
</html>