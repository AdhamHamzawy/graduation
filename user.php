<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="image/ico" href="img/users.png"  />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
	background-image:url(img/img2.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	}

	* {
	  box-sizing: border-box;
	}

	.sidenav{
		position: relative;
	  	width: 20%;
	  	height: 100%;
	  	padding-top: 5%;
  		background-color: black;
  		float: left;

	}
	.sidenav a {

	  color: #818181;;
	  font: 200% bold;
	  padding-left: 20%;

	}
	.sidenav a:hover {
	  color: #f1f1f1;

	}


	.logo{


		width: 80%;
		position: relative;
	    left: 10%;
	}
	.sidenav h1{

	  color: white;
	  font: 150% bold;
	  text-align: center;;
	}

	.rectangle{
	  background: rgba(255, 255, 255,1);
	  position: absolute;
	  left: 5%;
	  top: 5%;
	  width: 90%;
	  height: 90%;

	}

</style>
<body>

	<div class="rectangle">
	 <div class="sidenav">
	  <img src="img/img1.png" class="logo">

	  <br><br><br>
	  <a onclick="ShowPillar()">Pillar</a>
	  <br><br>
	  <a onclick="ShowMessages()">Messages <span class="badge">2</span> </a>
	  <br><br>
    <a onclick="ShowResults()">Results</a>
    <br><br>
	  <br>
	  <a href="logout.php">Log Out   <span class="glyphicon glyphicon-log-out" ></span></a>

	  </div>

       <script>
		    $(document).ready(function(){
		        ShowPillar();
		    });
	  </script>
	  <script>
		function ShowPillar() {

			document.getElementById("Pillar").style.display = "block";
			document.getElementById("Messages").style.display = "none";
      document.getElementById("Results").style.display = "none";


		}


		function ShowMessages() {

			document.getElementById("Pillar").style.display = "none";
			document.getElementById("Messages").style.display = "block";
      document.getElementById("Results").style.display = "none";


		}

    function ShowResults() {

      document.getElementById("Pillar").style.display = "none";
      document.getElementById("Messages").style.display = "none";
      document.getElementById("Results").style.display = "block";


    }

	   </script>
        <div class="DataTable" style="overflow:auto;" id="Pillar">  <!-- Tourists block -->

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
      <th>Pillar ID</th>
			<th>section</th>
			<th>Images</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Tourists database php-->

      <tr>
        <td>1</td>
        <td>1</td>
        <td> <a href="#">Link</a> <button type="button" class="btn btn-danger">Delete Images</button> </td>
        <td> <button type="button" class="btn btn-danger">Delete Section</button> </td>
      </tr>

      <tr>
        <td>1</td>
        <td>2</td>
        <td> <button type="button" class="btn btn-success">Add Images</button> </td>
        <td></td>
      </tr>

      <tr>
        <td>1</td>
        <td>3</td>
        <td> <button type="button" class="btn btn-success">Add Images</button> </td>
        <td></td>
      </tr>

      <tr>
        <td>2</td>
        <td> <button type="button" class="btn btn-success">Add Section</button> </td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td> <button type="button" class="btn btn-success">Add Pillar</button> </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

			</tbody>
		</table>
		</div>



		<div class="DataTable" style="overflow:auto;" id="Messages">  <!-- Requests block -->
      <span class="pull-left" style="padding-left:5%;padding-top:1%;padding-bottom:1%;"><a href="#creatMsg" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Create Message</a></span>

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
			<th>ID</th>
			<th>Message</th>
      <th>Expert Name</th>
			<th>Reply</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Requests database php-->

        <tr>
          <td>1</td>
          <td>Please help</td>
          <td>Omar</td>
          <td>How can i help,sir?</td>
          <td></td>
        </tr>

        <tr>
          <td>2</td>
          <td>How can i logout?</td>
          <td>yasser</td>
          <td>there is a logout button</td>
          <td></td>
        </tr>

        <tr>
          <td>3</td>
          <td>can i edit an image?</td>
          <td></td>
          <td>Pending...</td>
          <td> <button type="button" class="btn btn-danger">Delete Message</button> </td>
        </tr>

			</tbody>
		</table>
		</div>

    		<div class="DataTable" style="overflow:auto;" id="Results">  <!-- Requests block -->

    			<table class="table table-striped table-hover">
    			<thead>
    		 <tr>
           <th>Pillar ID</th>
     			<th>section</th>
     			<th>Images</th>
     			<th>Defects</th>
    			<th>Status</th>
          <th>Action</th>
    		</thead>
        		<tbody>
        		<!-- Requests database php-->

            <tr>
              <td>1</td>
              <td>1</td>
              <td> <a href="#">Link</a> </td>
              <td>1. ...
              2. ...
            3. ...</td>
              <td> <button type="button" class="btn btn-danger">Danger</button> </td>
              <td> <a href="#"> Request Expert Review</a> </td>
            </tr>

            <tr>
              <td>2</td>
              <td>3</td>
              <td> <a href="#">Link</a> </td>
              <td>1. ...
              2. ...</td>
              <td> <button type="button" class="btn btn-warning">Moderate</button> </td>
              <td> Pending Expert's review... </td>
            </tr>

            <tr>
              <td>5</td>
              <td>7</td>
              <td> <a href="#">Link</a> </td>
              <td>1. ...
              2. ...</td>
              <td> <button type="button" class="btn btn-success">Safe!</button> </td>
              <td> Expert Modified Results! </td>
            </tr>

    			</tbody>
    		</table>
    		</div>


	</div>
</body>
</html>
