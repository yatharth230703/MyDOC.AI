<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.svg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/7025054a8a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="theme-color" content="paleturquoise">
    <title>MyDoc.AI</title>
    <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <style>
        an.hover {
            text-decoration: underliner;
            color: darkgoldenrod;
        }
        /* width */
        
         ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            background: white;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background: gainsboro;
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: #999;
        }
        
        body {
            
        background-color:#7fbab0;
            background : url("images/bg3.png");
            background-size : cover;
            background-repeat: no-repeat;
            width : 100%;
            height : 100%;
            overflow:hidden;
            display: flex;
        flex-direction: column;
        }
        
         ::-webkit-scrollbar {
            display: none;
        }
        
        .modal-dialog {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        .modal-content {
            height: auto;
            min-height: 100%;
            border-radius: 0;
        }
        .parallelogram {
	width: 65%;
	height: 100px;
    position:relative;
    left:-70px;
	transform: skew(-40deg);
	background: linear-gradient(to bottom, #94e0d3, transparent);
}
input[type="text"] {
  border-radius: 10px;
  box-shadow:0px 0px 1.5px 1.5px rgba(0, 0, 0, 0.25);
  padding: 10px;
  width: 450px;
  font-size: 18px;
  outline: none;
  border:none;
}
input::-webkit-input-placeholder {
     color: black; /*Change the placeholder color*/
     opacity: 0.2; /*Change the opacity between 0 and 1*/
}

input[type="text"]:focus {
  border-color: #007bff;
}
.vl {
			border-left: 1px solid black; /* Change the color and thickness as desired */
			height: 25px ;
		}
        .footer-section {
  position: relative;
}

.social-media-section{
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: right;
}
.social-media-section-2{
    position: absolute;
    top: -10px;
    right: 100px;
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: right;
}

@media (max-width:967px) {
  .social-media-section {
    float: left !important;
    right: auto;
    text-align: center;
    position: relative;
    padding: 0;
  }
}

select.ui-datepicker-month>option.customOption:hover {
  color: red;
}

.myClass {
  color: #fff;
}

.tab-content {
  min-height: 600px;
}

.no-del-msg {
  font-family: 'ralewaymedium';
  font-size: 14px;
  font-style: italic;
}

.icon-desciption {
  padding-right: 0;
  padding-left: 0;
}
.footer-section {
  background: #e5e5e5;
}

p.text-muted {
  margin-bottom: 0;
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: center;
}

.social-media-icons {
  position: absolute;
  right: 0;
  top: 15px;
}

.fc-today-button {
  display: none;
}

.copyright-footer-text {
  font-family: 'ralewaymedium';
  font-size: 12px;
  color: #333333;
}

.social-media-section>a {
  margin-left: 20px;
  color: #465e8d;
}

.social-media-section>a:hover {
  color: #e36a5c;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top2">
        <a class="navbar-brand" href="index.php" style="padding:10px 5px"><img src="images/logo.PNG" height="50px" style="position:relative;left:10px;top:10px"></img>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <a class="btn" href="plans.php" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px"><b>HEALTH PLANS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn" href="reviews.php" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px"><b>REVIEWS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn" href="aboutus.php" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px"><b>ABOUT US</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown show">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px">
                <b>MORE</b>
                </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background:linear-gradient(to bottom, rgb(67, 146, 132,0.7), rgb(144, 144, 144,0.7));border:none">
            <a class="dropdown-item" href="why-choose-us.php">Why Choose Us?</a>
            <a class="dropdown-item" href="faq.php">FAQs</a>
            <a class="dropdown-item" href="mailto: chughishan127@gmail.com">Contact Us</a>
  </div>
</div>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a type="button" class="connect btn btn-info" style="padding:11px 25px; border-radius:35px; background-color: #5da99c; border: #5da99c; box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.25); position:relative; left:70px">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a type="button" href="signup.php" class="btn btn-info" style="padding:11px 25px;border-radius:35px; background-color:white; position:relative;left:5px;z-index:-1;color:black; padding-left:50px;border:white;">SIGN UP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
        </div>
    </nav>
    <br><br>
    <div class="container" style="text-align:center; float:center">
    <h1 style="color:white; font-family:Sen;text-align:center;">Why we are the best option out there!</h1>
    <br><br><br>
    <h3 style="color:white; font-family:Sen;text-align:center;">Your data is secure with us as we use web3, a decentralised platform where the data is immutable and there is no chance of data leak.</h3> <br><br> <p>
    <h3 style="color:white; font-family:Sen;text-align:center;">The edge we have in the market is that you can share your healthcare data with any doctor you wish to consult in the near future.</h3> <br><br>
    <h3 style="color:white; font-family:Sen;text-align:center;">We have got you covered as we are available 24/7.</h3>
    <br>
    </div>
    <br><br><br><br>
    <div class="container-fluid footer-section" style="position:relative;top:-10px; background-color:transparent;">
  <footer class="footer" >
    
    <div class="pull-left social-media-section">
    
      <a href="https://facebook.com"><i class="fa fa-2x fa-facebook" style="color:white"></i></a>      
      <a href="https://www.linkedin.com/in/ishan-chugh-893125219/"><i class="fa fa-2x fa-linkedin" style="color:white"></i></a>
      <a href="https://twitter.com/IshanChugh12"><i class="fa fa-2x fa-twitter" style="color:white"></i></a>
      <a href="https://instagram.com/5aeez"><i class="fa fa-2x fa-instagram" style="color:white"></i></a>
    </div>
    <div class="footer-section col-xs-12" style="background-color:transparent;">
      <p class="text-muted copyright-footer-text" style="color:white">Copyright 2023 © MyDoc.AI | All rights reserved.</p>

    </div>
    <div class="pull-left social-media-section-2">
    <a type="button" href="mailto: chughishan127@gmail.com" class="connect btn btn-info" style="padding:11px 25px; border-radius:35px; background-color: #5da99c; border: #5da99c; box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.25); position:relative; left:70px; background-color:white; color:black;">CONTACT US</a>
    </div>
  </footer>
</div>
        

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>