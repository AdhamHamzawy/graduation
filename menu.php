<html>
<head>
</head>
<head>
  <div class="wrap">
      <header id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <button id="primary-nav-button" type="button">Menu</button>
                      <nav id="primary-nav" class="dropdown cf">
                        <a href="index.php"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <ul class="dropdown menu">
                        <!-- <li class='active'><a href="userhomepage.php">Home</a></li>
                            <li class='active'><a href="profile.php">My profile</a></li>
                            <li class='active'><a href="signup.php">Buildings</a></li>
                            <li class='active'><a href="services.php">Results</a></li>
                            <li class='active'><a href="services.php">Messages</a></li>
                            <li class='active'><a href="logout.php">Logout</a></li> -->

                            <?php
                            // $_SESSION["ID"]=1;
                            // $_SESSION["Type"]="A";
                            if(!empty($_SESSION['ID']) && $_SESSION["Type"]=="C") //client
                            {
                              ?>
                              <li class='active'><a href="profile.php">My profile</a></li>
                              <li class='active'><a href="user2.php">Buildings</a></li>
                              <li class='active'><a href="UserResults.php">Results</a></li>
                              <li class='active'><a href="UserMessages.php">Messages</a></li>
                              <li class='active'><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out" ></span></a></li>

                              <?php
                            }
                            else if (!empty($_SESSION['ID']) && $_SESSION["Type"]=="X") //Expert
                            {
                              ?>
                              <li class='active'><a href="profile.php">My profile</a></li>
                              <li class='active'><a href="ExpertResults.php">Results</a></li>
                              <li class='active'><a href="UserMessages.php">Messages</a></li>
                              <li class='active'><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out" ></span></a></li>
                              <?php
                            }
                            else if (!empty($_SESSION['ID']) && $_SESSION["Type"]=="A") //Admin
                            {
                              ?>
                              <li class='active'><a href="profile.php">My profile</a></li>
                              <li class='active'><a href="ViewUsers.php">Check Users</a></li>
                              <li class='active'><a href="AddDefects.php">Defects</a></li>
                              <li class='active'><a href="AdminMessage.php">Messages</a></li>
                              <li class='active'><a href="logout.php">Logout <span class="glyphicon glyphicon-log-out" ></span></a></li>
                              <?php
                            }
                            else
                            {
                              ?>
                              <li class='active'><a href="signup.php">Sign Up</a></li>
                              <li class='active'><a href="signin.php">Sing In</a></li>
                              <?php
                            }

                             ?>

                        </ul>
                      </nav><!-- / #primary-nav -->
                  </div>
              </div>
          </div>
      </header>
  </div>

</head>
</html>
