<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.svg" type="images/logo.png">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>
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
            background : url("images/bg2.png");
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
<script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>

    <script> 
    function sendVariableToPHP(myVariable) {
  // Set the value of the hidden input field
  document.getElementById("myVariable").value = myVariable;
  console.log(myVariable);
 document.getElementById("sed").click();
  // Create an XMLHttpRequest object
  var xhttp = new XMLHttpRequest();

  // Define the function to handle the response from the server
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Handle the response from the server here
      console.log(this.responseText);
    }
  };

  // Open the connection to the server and send the form data
  xhttp.open("POST", "loginheader.php", true);
  xhttp.send(new FormData(document.getElementById("myForm")));
}

    async function connectMetamask() {
  if (window.ethereum) {
    try {
      // Request account access if needed
      await window.ethereum.request({ method: 'eth_requestAccounts' });
      // Accounts now exposed
      const a=ethereum.request({ method: 'eth_accounts' });
      const c  = a.then(result => {
            sendVariableToPHP(result[0]);       
      });
    } catch (error) {
      console.error(error);
    }
  } else {
    console.log('No Metamask detected');
  }
}

    const ethereumButton = document.querySelector('.connect');
    ethereumButton.addEventListener('click', () => {
    // Will open the MetaMask UI
    ethereum.request({ method: 'eth_requestAccounts' });
});

    </script>
    <form id="myForm" action="loginheader.php" method="post">
        <input type="hidden" name="myVariable" id="myVariable">
        <button type="hidden" id="sed"></button>
</form>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top2" style="overflow:hidden;z-index=2">
        <a class="navbar-brand" href="index.php" style="padding:10px 5px"><img src="images/logo.PNG" height="50px" style="position:relative;left:10px;top:10px"></img>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow:hidden;z-index=2">
            <ul class="navbar-nav ml-auto">
            <a class="btn" href="plans.php" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px"><b>HEALTH PLANS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:10px;color:white; font-size:22px"><b>REVIEWS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <a type="button" class="connect btn btn-info" style="padding:11px 25px; border-radius:35px; background-color: #5da99c; border: #5da99c; box-shadow:0px 0px 1px 1px rgba(0, 0, 0, 0.25); position:relative; left:70px; z-index=3">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a type="button" href="signup.php" class="btn btn-info" style="padding:11px 25px;border-radius:35px; background-color:white; position:relative;left:5px;z-index:-1;color:black; padding-left:50px;border:white;">SIGN UP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
        </div>
    </nav>
    <br><br><br>
    
    <h2 style="color:white; position:relative;left:60px; font-family:Sen"><b>Login</b></h2>
    
    <br>
    <form class="login-form" action="/loginheader.php" method="POST">
    <div>
        <input type="text" placeholder="Email" name="email" style="color:black; position:relative;left:60px; font-family:Sen; border-radius:20px;display:inline-block;">
    <br><br>
    <input type="text" placeholder="Password" name="password" style="color:black; position:relative;left:60px; font-family:Sen; border-radius:20px;display:inline-block;"></div>
    <br>
    </div>
    <div>
    <button type="submit" class="btn btn-info" style="padding:11px 25px;border-radius:15px; background-color:white; position:relative;left:5px;color:white; border:white;display:inline-block;background-color:#94DFD4;box-shadow:0px 0px 2px 2px rgba(0, 0, 0, 0.15); left:60px; width:290px"><b> LOGIN </b></button> </form> &nbsp; &nbsp;&nbsp; <a type="button" href="signup.php" class="btn btn-info" style="padding:11px 25px;border-radius:15px; background-color:white; position:relative;left:5px;color:black; border:white;display:inline-block;background-color:rgba(255, 255, 255, 0.95);box-shadow:0px 0px 2px 2px rgba(0, 0, 0, 0.15); left:60px; width:130px"><b> SIGN UP </b></a>  </div>
    <div><br> <hr style="width:10%;text-align:left;margin-left:60px; display:inline"><hr style="width:13%;text-align:left;margin-left:0;display:inline-block; position:relative;top:10px"><h5 style="display:inline-block; left:11%"> &nbsp; OR &nbsp; </h5><hr style="width:13%;text-align:left;margin-left:0;display:inline-block;position:relative;top:10px""> </div>
    <a type="button" class="btn btn-info" onclick="connectMetamask()" style="padding:11px 25px;border-radius:15px; background-color:white; position:relative;left:5px;z-index:1;color:black; border:white;display:inline-block;background-color:rgba(255, 255, 255, 0.95);box-shadow:0px 0px 2px 2px rgba(0, 0, 0, 0.15); left:60px; width:450px; text-align:left; padding: 10px 50px;">LOG IN WITH METAMASK <img src="images/mm.png" style="float:right; height:27px;"></img></a></div>

    <br>
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
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