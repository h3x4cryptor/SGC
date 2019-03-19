
<?php include('db.php');
session_start();
?>
  <!-- Top Navbar-->
  <div class="navbar">
                <div class="navbar-inner">
                    <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
                    <div class="right fit sliding">
                        <kbd class="root">
                            <img src="./img/logo.png" width="18px" height="18px"></img>e-Complex
                            <kbd id="clockDisplay"></kbd>
                            <div id="myDIV"> </div>
            <input id="myInput" type="text" placeholder="Search..">
                        </kbd>
                    </div>
                    <div class="left">
    <!--
    Right link contains only icon - additional "icon-only" class
    Additional "open-panel" class tells app to open panel when we click on this link
    -->
    <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
    <div class="left">
        <parent class="link icon-only">
            <div class="dropdown">
            <button class="btn" type="button" data-toggle="dropdown">
             <i class="icon f7-icons material-icons ios-only">person<span class="badge color-red"></span></i>
            </button>


                   <ul class="loggedin dropd dropdown-menu">
                        <li>
                        <?php                                                 
                        if (isset($_SESSION['username'])) {
                        echo "      Welcome back ";
                        echo $_SESSION['username'];
                        echo '<br /><div class="container"><span style="font-size:10;"><p> You`are logged in <a class="link external" href="dashboard.php"><i class="icon fa fa-gear"> Dashboard.</i></a></span>';
                        echo "<br />";
                        echo '<form action="logout.inc.php" method="POST">
                        <input class="btn btn-danger" type="submit" value="Logout" name="logoutbutton"/>
                        </form></div>';
                        echo "<br />";

                        } else { echo '<div class="container">
                            <br />
                            <center><img src="img/logo.png" title="Logo" hieght="120" width="220"></img></center>
                                        <h3><i class="icon fa fa-lock"> Login:</h3></i>
                                    <form method="POST" action="signin.inc.php">
                                        <br />
                                        <input class="form-control" type="text" class="input" name="username" placeholder="Username..." /><br />
                                        <input class="form-control" type="password" class="input" name="pass" placeholder="Password..." /><br />
                                        <input class="btn btn-primary" type="submit" value="Login" name="loginbutton"/>
                                    </form>
                                    <br />
                            <span style="font-size:10;"><p> Don`t have an account? <a class="link external" href="register.php"><i class="icon fa fa-user"> Signup HERE.</i></a></span>
                            </div>
                            </center>';
                        }
                        $cookie_name = "username";
                        $cookie_value = $_SESSION['username'];
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                        ?>                                                                                  
                        Welcome <?php echo $_GET["username"]; ?><br>
                        Your email address is: <?php echo $_GET["email"]; ?>
                        </li>
                            <li></li>
                                </ul>
                                    </div>
                                        </parent>
                                            </div>
                                                </div>
                                                    </div>
                                                        </div>
                                                        