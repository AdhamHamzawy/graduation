<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="image/ico" href="img/expert.png"  />
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
	  <a onclick="ShowResults()">Results</a>
	  <br><br>
	  <a onclick="ShowMessages()">Messages</a>
	  <br><br>
	  <br>
	  <a href="logout.php">Log Out   <span class="glyphicon glyphicon-log-out" ></span></a>

	  </div>

       <script>
		    $(document).ready(function(){
		        ShowResults();
		    });
	  </script>
	  <script>
		function ShowResults() {

			document.getElementById("Results").style.display = "block";
			document.getElementById("Messages").style.display = "none";

		}


		function ShowMessages() {

			document.getElementById("Results").style.display = "none";
			document.getElementById("Messages").style.display = "block";

		}

	   </script>
        <div class="DataTable" style="overflow:auto;" id="Results">  <!-- Tourists block -->

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
      <th>ID</th>
			<th>User ID</th>     		<!-- names-->
			<th>Images</th>
      <th>Defects</th>
      <th>Status</th>
      <th>Action</th>
		</thead>
    		<tbody>
    		<!-- Tourists database php-->

        <tr>
          <td>1</td>
          <td>6</td>
          <td> <a href="#">Link</a> </td>
          <td>1. ... 2. ... 3. ... <button type="button" class="btn btn-info">Edit</button> </td>
          <td> <button type="button" class="btn btn-danger">Danger</button> <div class="btn-group"> <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Edit</button>     <ul class="dropdown-menu" role="menu">
      <li><a href="#">Safe!</a></li>
      <li><a href="#">Moderate</a></li>
    </ul> </div></td>
          <td> <button type="button" class="btn btn-success">Confirm!</button> </td>
        </tr>

        <tr>
          <td>2</td>
          <td>13</td>
          <td> <a href="#">Link</a> </td>
          <td>1. ... 2. ... 3. ... <button type="button" class="btn btn-info">Edit</button> </td>
          <td> <button type="button" class="btn btn-success">Safe!</button> <div class="btn-group"> <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Edit</button>     <ul class="dropdown-menu" role="menu">
      <li><a href="#">Moderate</a></li>
      <li><a href="#">Danger</a></li>
    </ul> </div> </td>
          <td> <button type="button" class="btn btn-success">Confirm!</button> </td>
        </tr>

			</tbody>
		</table>
		</div>



		<div class="DataTable" style="overflow:auto;" id="Messages">  <!-- Requests block -->
      <span class="pull-left" style="padding-left:5%;padding-top:1%;padding-bottom:1%;"><a href="#creatMsg" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Create Message</a></span>

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
			<th>Message ID</th>
			<th>User</th>
			<th>Message</th>
			<th>Reply</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Requests database php-->

        <tr>
          <td>1</td>
          <td>jimmy</td>
          <td> Please help </td>
          <td> <input type="text" value="How can i help,sir?"></td>
          <td>  <button type="button" class="btn btn-success">Send</button> </td>
        </tr>

        <tr>
          <td>16</td>
          <td>mahmoud</td>
          <td> I updated the images </td>
          <td> <input type="text"> </td>
          <td> <button type="button" class="btn btn-success disabled">Send</button> </td>
        </tr>

        <tr>
          <td>19</td>
          <td>omar</td>
          <td> can i upload normal images </td>
          <td> sorry, You can't </td>
          <td></td>
        </tr>

			</tbody>
		</table>
		</div>


	</div>
</body>
</html>
