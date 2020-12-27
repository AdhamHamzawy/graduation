<!DOCTYPE html>
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

	<title>Profile page</title>
    <?php
        include "menu.php";

    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;


}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #white;
  width: 10%;
  height: 400px;

}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;

  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #38A2EE;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 4px solid #ccc;
  width: 89%;
  border-left: none;
  height: 400px;
  margin:50;
}
</style>
</head>

<body>


<div class="tab">
  <button class="tablinks" onclick="opendiv(event, 'Account')" id="defaultOpen">Account </button>
  <button class="tablinks" onclick="opendiv(event, 'Address')">Address details</button>
</div>

<div id="Account" class="tabcontent">
<h3>Profile details</h3>

    <div class="row">
        <div class="col-md-3">
            <img src="//placehold.it/200" alt="">
        </div>
        <div class="col-md-7">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2">Firstname:</div>
                        <div class="col-md-4"><input type="text" name="FN"></div>
                        <div class="col-md-2">Lastname:</div>
                        <div class="col-md-4"><input type="text" name="LN"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-2">Email:</div>
                        <div class="col-md-4"><input type="text" name="Email"></div>
                        <div class="col-md-2">Password:</div>
                        <div class="col-md-4"><input type="Password" name="Password"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-2">Age:</div>
                        <div class="col-md-4"><input type = "text" name = "Age"></div>

                </div>
                <br>
                <input type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-3">
        <p>Click on the "Choose File" button to upload a Image:</p>

<form action="/action_page.php">
  <input type="file" id="myFile" name="filename">

  </form>
        </div>
    </div>

</div>

<div id="Address" class="tabcontent">
  <h3>Address Details</h3>
  <div class="col-md-7">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2">Street1:</div>
                        <div class="col-md-4"><input type="text" name="FN"></div>
                        <div class="col-md-2">HomeNumber:</div>
                        <div class="col-md-4"><input type="text" name="LN"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-2">Zip code:</div>
                        <div class="col-md-4"><input type="text" name="Email"></div>
                        <div class="col-md-2">Phone Number:</div>
                        <div class="col-md-4"><input type="Password" name="Password"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-2">Landmark</div>
                        <div class="col-md-4"><input type = "text" name = "Age"></div>

                </div>
                <br>
                <input type="submit" value="Submit" name="Submit">
            </form>
        </div>
</div>


<script>
function opendiv(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<br>
<?php
include "footer.php";
?>
</body>
</html>
