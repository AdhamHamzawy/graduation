<!DOCTYPE html>
<html>
    <head>

      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <link rel="stylesheet" href="css/bootstrap.min.css">
              <link rel="stylesheet" href="css/bootstrap-theme.min.css">
              <link rel="stylesheet" href="css/fontAwesome.css">
              <link rel="stylesheet" href="css/hero-slider.css">
              <link rel="stylesheet" href="css/owl-carousel.css">
              <link rel="stylesheet" href="css/datepicker.css">
              <link rel="stylesheet" href="css/templatemo-style.css">

              <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

              <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>



      <?php
include "menu.php";
       ?>

       <style>
       <?php
       include "css/gallery.css";
        ?>
       </style>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
      <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

      <div class="DataTable" style="overflow:auto; padding:5%" id="Experts">  <!-- Staff block -->
      <button class= "btn btn-primary collapsible" style="font-size: 18px;border-radius: 10px;margin-bottom: 6px;" >Add Expert<span class="glyphicon glyphicon-plus" ></span></button>

  <div class="content">

  <div class="wrapper ">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->


      <form style="padding:3%" action="###" method="post">
          <div class="form-group">
              <div class="col-sm-9">
                  <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-9">
                  <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
              </div>

              <div class="col-sm-9">
                  <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
              </div>

              <div class="col-sm-9">
              <input type="password" id="psw" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange="form.pwd2.pattern = RegExp.escape(this.value);" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="form-control" required>
              </div>

              <div class="col-sm-9">
              <input type="password" id="pwd2" name="pwd2"  placeholder="Confirm Password" class="form-control" required>

              </div>

                <div class="col-sm-9">

<input type="date" name="date" id="birthDate" class="form-control">
</div>
<label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>


              <div class="col-sm-9">
                  <input type="phoneNumber" name="phone" id="phoneNumber" placeholder="Phone number" class="form-control">
                  <span class="help-block"></span>
              </div>

              <div class="col-sm-6">
                  <div class="row">
                    <label class="control-label col-sm-3">Gender</label>
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

              <div class="col-sm-9 col-sm-offset-3">
                  <span class="help-block"></span>
              </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          <button type="reset" class="btn btn-primary btn-block">Reset</button>

          </form>


  </div>
  </div>

    </div>

  <table class="table table-striped table-hover">
  <thead>
 <tr>
  <th>Name</th>
  <th>User type </th>
  <th>Email</th>
  <th>Mobile</th>
  <th>Action</th>
</thead>
    <tbody>
    <!-- Staff database php-->

    <tr>
      <td>Nour</td>
      <td> Expert</td>
      <td>nour@123.com</td>
      <td>0101010101010</td>
      <td> <button type="button" class="btn btn-danger">Block</button> </td>
    </tr>

    <tr>
      <td>Nour</td>
      <td> Client</td>
      <td>nour@123.com</td>
      <td>0101010101010</td>
      <td> <button type="button" class="btn btn-danger">Block</button> </td>
    </tr>

    <tr>
      <td>Nour</td>
      <td> Expert</td>
      <td>nour@123.com</td>
      <td>0101010101010</td>
      <td> <button type="button" class="btn btn-danger">Block</button> </td>
    </tr>

  </tbody>
</table>
</div>

<?php
include "footer.php";
 ?>

</body>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
this.classList.toggle("active");
var content = this.nextElementSibling;
if (content.style.maxHeight){
content.style.maxHeight = null;
} else {
content.style.maxHeight = content.scrollHeight + "px";
}
});
}

  // polyfill for RegExp.escape
  if(!RegExp.escape) {
    RegExp.escape = function(s) {
      return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
    };
  }



</script>


</html>
