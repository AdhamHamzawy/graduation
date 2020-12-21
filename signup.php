<html>



<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
    
    
    
    body {
    background: url('img/main_banner.jpg') fixed;
    background-size: cover;
        
}

*[role="form"] {
    
    max-width: 530px;
    padding: 15;
    padding-bottom:50;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: white;
}

*[role="form"] h2 { 
    
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
    
    .img
    {
        height: 200px;
        width: 75%;
        align-self: auto;
        padding: 50;
        padding-left: 15;
        margin-left: 100;
        
        
    }
    </style>



</head>


<body>
<!-- 

Read more: https://html.com/tags/comment-tag/#ixzz6hIqljXBe
<div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="#">SignIn</a></li>
                                <li class='active'><a href="#">Signup</a></li>
                              
                                   
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="#">Blog Entries</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div> -->
<?php
    
   
    
    
     
        if(isset($_POST["submit"])) { 
             
             
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phonenumber = $_POST['phone'];
            $gender = $_POST['gender'];
            $DOB=$_POST["date"];
            
            
            
            
            include_once("DBHelper.php");
            $db=new DBHelper();
            $sql="INSERT INTO user(status,Firstname,Lastname,Email,Password,DOB,phoneNum, Gender) VALUES ('pending','$firstname','$lastname','$email',' $password','$phonenumber','$gender','$DOB')";;
            //var_dump($sql);
          $result = mysqli_query($conn,$sql);
            if($result)	
		    {
			 echo "<script>
              alert('Submitted successfully');
               window.location.href='signin.php';
              </script>";  
		    }
		   
            return $result;
        } 
   // }


        ?>
    
    
<div class="container">
            <form class="form-horizontal" method="post" action="signin.php" role="form">
                <img src="img/logo.png" class="img"><h3 style="font-weight: bold;     padding-bottom: 25;
    padding-left: 60;
align-content: center; margin-left:150;">Sign up</h3>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                    <input type="password" id="psw" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                    <input type="password" id="psw2" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="form-control" required>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phone" id="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block"></span>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male" checked>Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block"></span>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                <button type="reset" class="btn btn-primary btn-block">Reset</button>
                
                </form>		
</div>
    
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the userstype something inside the password field
myInput.onkeyup = function() {
  // da validate l lower case
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validat cap letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate num
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
         

        
    </body>
    </html>
    
    