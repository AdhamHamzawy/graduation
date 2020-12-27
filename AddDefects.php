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

      <div class="DataTable" style="overflow:auto; padding:5%" id="Messages">  <!-- Requests block -->
        <button class= "btn btn-primary collapsible" style="font-size: 18px;border-radius: 10px;margin-bottom: 6px;" >Add Defect<span class="glyphicon glyphicon-plus" ></span></button>

        <div class="content">

        <div class="wrapper ">
          <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->


            <form style="padding:3%" action="###" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="description">Description:</label>
                  <input type="text" class="form-control" id="description">
                </div>
                <div class="form-group">
                  <!-- <a href="#">Add Images</a> -->
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success disabled">Add Defect</button>
              </div>
              </form>


</div>
</div>

          </div>


            <table class="table table-striped table-hover">
      			<thead>
      		 <tr><table class="table table-striped table-hover">
     			<thead>
            <tr>
       			<th>Name</th>
       			<th>Description</th>
       			<th>Images</th>       		<!-- links-->
       			<th>Action</th>
       		</thead>
           		<tbody>
           		<!-- Requests database php-->

               <tr>
                 <td>abc</td>
                 <td>blah blah blah</td>
                 <td> <a href="#">Link</a> </td>
                 <td> <button type="button" class="btn btn-danger">Delete</button> </td>
               </tr>

               <tr>
                 <td>def</td>
                 <td>blah blah blah</td>
                 <td> <a href="#">Link</a> </td>
                 <td> <button type="button" class="btn btn-danger">Delete</button> </td>
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
