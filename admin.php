<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="image/ico" href="img/admin.png"  />
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
	  <a onclick="ShowUsers()">Users</a>
	  <br><br>
	  <a onclick="ShowDefects()">Defect</a>
	  <br><br>
	  <a onclick="ShowExperts()">Experts</a>
	  <br><br>
	  <a onclick="ShowNews()">News</a>
	  <br><br>
	  <br>
	  <a href="logout.php">Log Out   <span class="glyphicon glyphicon-log-out" ></span></a>

	  </div>

       <script>
		    $(document).ready(function(){
		        ShowUsers();
		    });
	  </script>
	  <script>
		function ShowUsers() {

			document.getElementById("Users").style.display = "block";
			document.getElementById("Defects").style.display = "none";
			document.getElementById("Experts").style.display = "none";
			document.getElementById("News").style.display = "none";

		}


		function ShowDefects() {

			document.getElementById("Users").style.display = "none";
			document.getElementById("Defects").style.display = "block";
			document.getElementById("Experts").style.display = "none";
			document.getElementById("News").style.display = "none";

		}


		function ShowExperts() {

			document.getElementById("Users").style.display = "none";
			document.getElementById("Defects").style.display = "none";
			document.getElementById("Experts").style.display = "block";
			document.getElementById("News").style.display = "none";

		}

		function ShowNews() {

			document.getElementById("Users").style.display = "none";
			document.getElementById("Defects").style.display = "none";
			document.getElementById("Experts").style.display = "none";
			document.getElementById("News").style.display = "block";

		}
	   </script>
        <div class="DataTable" style="overflow:auto;" id="Users">  <!-- Tourists block -->

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
      <th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Tourists database php-->

        <tr>
          <td>1</td>
          <td>Omar</td>
          <td>Omar@123.com</td>
          <td>0111111111</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Jimmy</td>
          <td>jimmy@123.com</td>
          <td>01515151515</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Nour</td>
          <td>nour@123.com</td>
          <td>0101010101010</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

			</tbody>
		</table>
		</div>



		<div class="DataTable" style="overflow:auto;" id="Defects">  <!-- Requests block -->

      <form class="form-inline" action="/action_page.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" class="form-control" id="description">
        </div>
        <div class="form-group">
          <a href="#">Add Images</a>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success disabled">Add Defect</button>
      </div>
      </form>

      <!-- <span class="pull-left" style="padding-left:5%;padding-top:1%;padding-bottom:1%;"><a href="#addDef" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Defects' class</a></span> -->

			<table class="table table-striped table-hover">
			<thead>
		 <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Images</th>       		<!-- links-->
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Requests database php-->

        <tr>
          <td>1</td>
          <td>abc</td>
          <td>blah blah blah</td>
          <td> <a href="#">Link</a> </td>
          <td> <button type="button" class="btn btn-danger">Delete</button> </td>
        </tr>

        <tr>
          <td>2</td>
          <td>def</td>
          <td>blah blah blah</td>
          <td> <a href="#">Link</a> </td>
          <td> <button type="button" class="btn btn-danger">Delete</button> </td>
        </tr>

			</tbody>
		</table>
		</div>

		<div class="DataTable" style="overflow:auto;" id="Experts">  <!-- Staff block -->
			<span class="pull-left" style="padding-left:5%;padding-top:1%;padding-bottom:1%;"><a href="#addExpert" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Expert</a></span>
			<table class="table table-striped table-hover">
			<thead>
		 <tr>
      <th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Staff database php-->

        <tr>
          <td>3</td>
          <td>Nour</td>
          <td>nour@123.com</td>
          <td>0101010101010</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Nour</td>
          <td>nour@123.com</td>
          <td>0101010101010</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Nour</td>
          <td>nour@123.com</td>
          <td>0101010101010</td>
          <td> <button type="button" class="btn btn-danger">Block</button> </td>
        </tr>

			</tbody>
		</table>
		</div>

		<div class="DataTable" style="overflow:auto;" id="News">  <!-- Departments block -->
			<span class="pull-left" style="padding-left:5%;padding-top:1%;padding-bottom:1%;"><a href="#addNews" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add News</a></span>
			<table class="table table-striped table-hover">
			<thead>
		 <tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</thead>
    		<tbody>
    		<!-- Departments database php-->

        <tr>
          <td>3</td>
          <td>Header <button type="button" class="btn btn-info">Edit</button> </td>
          <td>blah blah blah  <button type="button" class="btn btn-info">Edit</button> </td>
          <td> <button type="button" class="btn btn-danger">Delete</button> </td>
        </tr>

        <tr>
          <td>3</td>
          <td> <input type="text" value="Header"> <button type="button" class="btn btn-success">Save</button> </td>
          <td>blah blah blah  <button type="button" class="btn btn-info">Edit</button> </td>
          <td> <button type="button" class="btn btn-danger">Delete</button> </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Header <button type="button" class="btn btn-info">Edit</button> </td>
          <td> <input type="text" value="blah blah blah"> <button type="button" class="btn btn-success">Save</button> </td>
          <td> <button type="button" class="btn btn-danger">Delete</button> </td>
        </tr>

			</tbody>
		</table>
		</div>


	</div>
</body>
</html>
