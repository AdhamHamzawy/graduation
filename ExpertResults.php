<!DOCTYPE html>
<html>
    <head>

      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
      <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

      <div class="DataTable" style="overflow:auto; padding:5%" id="Messages">  <!-- Requests block -->

            <table class="table table-striped table-hover">
              <thead>
             <tr>
              <th>User Name</th>     		<!-- names-->
              <th>Images</th>
              <th>Defects</th>
              <th>Note</th>
              <th>Action</th>
            </thead>
                <tbody>
                <!-- Tourists database php-->

                <tr>
                  <form style="padding:3%" action="###" method="post">

                  <td>bbb</td>
                  <td> <a href="#">Link</a> </td>
                  <td>1. ... 2. ... 3. ...
                    <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Edit</button>

                    <select class="dropdown-menu" class="selectpicker" multiple data-live-search="true">
    <option value="Defect1">Defect1</option>
    <option value="Defect2">Defect2</option>
    <option value="Defect3">Defect3</option>
    <option value="Defect4">Defect4</option>

  </select>
 </div>
 </td>
                  <td><input type="text" class="form-control" placeholder="Add Note..." id="ExpertNote"></input></td>
                  <td> <button type="Submit" class="btn btn-success">Confirm!</button> </td>
                </form>
                </tr>

                <tr>
                  <form style="padding:3%" action="###" method="post">
                  <td>jjj</td>
                  <td> <a href="img/img1.png">Link</a> </td>
                  <td>1. ... 2. ... 3. ...
                    <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Edit</button>

                    <select class="dropdown-menu" class="selectpicker" multiple data-live-search="true">
      <option value="Defect1">Defect1</option>
      <option value="Defect2">Defect2</option>
      <option value="Defect3">Defect3</option>
      <option value="Defect4">Defect4</option>

      </select>
      </div>
      </td>
              <td><input type="text" class="form-control" placeholder="Add Note..." id="ExpertNote"></input></td>

              <td> <button type="Submit" class="btn btn-success">Confirm!</button> </td>
                </form>

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
</script>


    </html>
