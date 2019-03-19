
<html>
<head>   
    <?php include('./_partial/_scripts.php') ?>
    <?php include('./_partial/_styles.php') ?>
    <?php include('./_partial/_globalsettingsinit.php') ?>
    <?php include('./_partial/_appicon.php') ?>
    <?php include('./_partial/_title.php') ?>       
</head>
<body>
   <!-- Left panel with reveal effect-->
        <?php include('./_partial/_leftnavpan.php')?>
    <!-- Views -->
    <div class="views">
        <!-- Your main view, should have "view-main" class -->
        <div class="view view-main">
               <?php include('./_partial/_topnavheader.php')?>
            <!-- Page Header start -->
            <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
            <div class="pages navbar-through toolbar-through">
                <!-- Page, "data-page" contains page name -->
                <div data-page="register" class="page">
                    <!-- Scrollable page content -->
                    <div class="page-content">




<!--Forms-->

<center><?php include('./_partial/_logo.php') ?></center><br />

                                        <?php 
session_start();


if (isset($_SESSION['username'])) {
echo '<div class="container">                                  
<div class="scont">












<center> </center><br />
<h3>I_USERS</h3>      Welcome back ';

echo $_SESSION['username'];
echo '<br /><div class="container left"><span style="font-size:10;"><p> You`are logged in <a class="link external" href="dashboard.php"><i class="icon fa fa-gear"> Dashboard.</i></a></span>';
echo "<br />";
echo '<form action="logout.inc.php" method="POST">
<input class="btn btn-danger" type="submit" value="Logout" name="logoutbutton"/>
</form></div>';
echo '<!--Show sql data-->
</div></div>
<br /><br />
<div class="container">                                  
<div class="content-block-inner">
<center> </center><br />
<h3>I_FINANCE</h3>


<!--Forms-->
<h4>Create Wallet form</h4>
<p>First thing to do is to make sure that you secure your wallet!</p>
<h3>Make sure that you secure your wallet with strong <span style="color:red">PIN.</span></h3>

<form action="forms.inc.php" method="POST">

<h3>Step 1</h3>
<input name="w_name" type="text" placeholder="Name your wallet..." class=""><br /><br />
<input name="w_pin" type="password" placeholder="Enter your PIN..." class=""><br /><br />
<input name="w_pinc" type="password" placeholder="Confirm your PIN..." class=""><br /><br />
<input name="w_id" type="text" disabled placeholder="Wallet ID..." class=""><br /><br />
</div><br />

<div class="content-block-inner highlight">
<h3>Step 2</h3>
<p>Choose your desired wallet type</p>
<label for="a_type">Choose account type </label> <select onchange="yesnoCheck(this);" id="a_type">
    <option value="" placeholder=""></option>
    <option value="checking">Checking</option>
    <option value="saving">Saving</option>
    <option value="invest">Investments</option>
    <option name="f_loant" value="loans">Loans</option>
    <option value="crypto">Crypto</option>
    </select>
    <div id="ifchecking" style="display: none;">
    <label for="flo_name">Choose a name</label> <input type="text" id="flo_name" name="flo_name" placeholder="Car, House..." /><br />
    <label for="flo_amount">Enter checking balance</label> <input type="text" id="flo_amount" name="flo_amount" placeholder="108,590.90 SAR..." /><br />
</div>
    <div id="ifsaving" style="display: none;">
    <label for="flo_name">Choose a name</label> <input type="text" id="flo_name" name="flo_name" placeholder="Car, House..." /><br />
    <label for="flo_amount">Enter saving balance</label> <input type="text" id="flo_amount" name="flo_amount" placeholder="108,590.90 SAR..." /><br />
</div>
    <div id="ifinvest" style="display: none;">
    <label for="flo_name">Name your investment</label> <input type="text" id="flo_name" name="flo_name" placeholder="Car, House..." /><br />
    <label for="flo_amount">Enter investment amount</label> <input type="text" id="flo_amount" name="flo_amount" placeholder="108,590.90 SAR..." /><br />
</div>
    <div id="ifloan" style="display: none;">
    <label for="flo_name">Enter loan type</label> <input type="text" id="flo_name" name="flo_name" placeholder="Car, House..." /><br />
    <label for="flot_amount">Enter loan total amount</label> <input type="text" id="flot_amount" name="flot_amount" placeholder="108,590.90 SAR..." /><br />
    <label for="flomi_amount">Enter loan monthly instalment</label> <input type="text" id="flomi_amount" name="flomi_amount" placeholder="1,999.90 SAR..." /><br />
    <label for="flo_period">Enter loan period</label> <input type="text" id="flo_period" name="flo_period" placeholder="5 years" /><br />
    <input class="btn btn-primary" type="submit" value="Create wallet" name="loansbutton"/>
</div>
<div id="ifcrypto" style="display: none;">
    <label for="fico_name">Enter coin name</label> <input type="text" id="fico_name" name="fico_name" placeholder="BTC, ETH, DASH." /><br />
    <label for="fico_amount">Enter coin amount</label> <input type="text" id="fico_amount" name="fico_amount" placeholder="0.9989878 ..." /><i class="icon fa fa-btc"></i><br />
    <input class="btn btn-primary" type="submit" value="Create wallet" name="coinbutton"/>                   
        </div><br /><br />
                        </form>

                        </div></div><br />








<br /><br />



<div class="scont">                                  
<div class="content-block-inner">








</div></div>




<div class="container">
<div class="blockquote">


                        <!--Show sql data-->';


                          
   
               
 echo '<br />



 ';



                            echo "</table>";
                            echo "<br />";
                            echo "<br />";
                        $sql = "SELECT * FROM i_comments ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table>  <col width="38">
                            <col width="160"><tr><th>User</th><th>Massege</th></tr>';


                       


                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        echo '<tr>
                        <td>#'.$row["id"].' <img class="mr-3 img-circle" src="./img/addr.gif" stule="border-radius: 50%;" height="25" width="25"></img> <a href="dashboard.php">@'.$row["username"].'</a></td>
                        <td>'.$row["c_data"].'</td>
                        </tr>';
             

                            
                        
                    }
                }
echo "</table>";

echo '<br />
                                
 </div></div>'; 
 



 echo'<div class="container">
<div class="blockquote">



<div class="media highlight1">
<img class="mr-3" src="./img/addr.gif" style="margin:10 10; border-radius: 50%;" height="55px" width="55px"><br />
<div class="media-body"><span><img src="./img/1280snap.png" width="94" height="94" style="float:right"></span>
    <header><span style="font-size:7">#'; echo $_SESSION['UUID']; echo '</span><br/><span class="mt-0 h3"><a href="dashboard.php"><span>@'; echo $_SESSION['username']; echo '</a>  </span></span><span class="fa fa-check-circle" style="color:orange"></span>&nbsp;<span class="label label-success">Deveoloper</span>&nbsp;<span class="label label-danger">Administrator</span></header><br />
    <span style="font-size:10" class="comment"><strong>Bio:</strong> Born July 7<sup>th</sup>, 1990.<br /> I <span class="icon fa fa-heart"></span> anything related to technology.</span><br />
    <span style="font-size:6" class="comment">Languages used to power and builed my projects:<br /> HTML, CSS, JS, jQuery, PHP, MySQL.<br /></span><br />


    
<footer class="card-footer">'; echo '<br /><span style="font-size:5;">Joined:<br />';  echo '&nbsp;'; echo $_SESSION['joined']; echo '&nbsp;'; echo '
</span>    <br />&nbsp;&nbsp;<span class="icon fa fa-twitter"></span>&nbsp;&nbsp;&nbsp;<span class="icon fa fa-instagram"></span>&nbsp;&nbsp;&nbsp;<span class="icon fa fa-facebook"></span>&nbsp;&nbsp;&nbsp;<span class="icon fa fa-whatsapp"></span>&nbsp;&nbsp;&nbsp;<span class="icon fa fa-skype"></span>&nbsp;&nbsp;&nbsp;<span class="icon fa fa-github"></span><br />&nbsp;&nbsp;&nbsp;</footer>





</div></div><p class="comment"></p>';

$sql = "SELECT * FROM i_comments WHERE username = '{$_SESSION['username']}' ORDER BY id DESC";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    echo '
    
    
    
    
    <table><tr><th><div class="container">                                  
    <form action="comments.inc.php" Method="POST">
     <center><textarea style="color:black; font-size:11; resize: none; border-radius:6px;" class="center fit cbox" rows="6" cols="50" name="c_data"></textarea>  <br />
    <input class="btn btn-primary" type="submit" onclick="audio.play ( )" value="POST your code..." name="commentbutton"/></form>
    <input id="comment" type="script" style="background-color:#0000335f; border-color:#0000335f;" size="1" name="commentbutton"><br><br>
    &nbsp;&nbsp;<i class="icon f7-icons material-icons ios-only ">home<span class="badge color-red"></span></i>&nbsp;&nbsp;&nbsp;<i class="icon f7-icons material-icons ios-only">persons<span class="badge color-red"></span></i>&nbsp;
    &nbsp;&nbsp;<i class="icon f7-icons material-icons ios-only ">chat<span class="badge color-red"></span></i>&nbsp;&nbsp;&nbsp;<i class="icon f7-icons material-icons ios-only">pie<span class="badge color-red"></span></i>&nbsp;
    &nbsp;&nbsp;<i class="icon f7-icons material-icons ios-only ">gear<span class="badge color-red"></span></i>&nbsp;&nbsp;&nbsp;<form class="ar" action="logout.inc.php" method="POST"><input class="btn btn-danger" type="submit" value="Logout" name="logoutbutton"/></form>




    <script type="text/javascript">
    $("#comment").focus();
    function OnLoad()
    {
        inputtxt = $("#comment").val();
        //and now your code
        $("#div1").load("comments.inc.php #div2");
        return false;
    }
    </script></center><br />
   







  </div></th></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo '<tr>
<td>'.$row["c_data"].'</td>
</tr>';
   }}
                          
                        $sql = "SELECT * FROM i_users";
                        $result = $conn->query($sql); 
                        if ($result->num_rows > 0) {
                            echo '<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Joined</th></tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["username"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["joined"]."</td>    
                        </tr></div>";
                            echo "<br /><br />";}}



                        echo "</table><br /><br />";
                        $sql = "SELECT * FROM i_users WHERE username = '{$_SESSION['username']}'"; 
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Joined</th></tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["username"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["joined"]."</td>    
                        </tr>";
                            
                    }
                }
                        echo "</table><br /><br />";
                        $sql = "SELECT * FROM i_finance WHERE username = '{$_SESSION['username']}'"; 
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table><tr><th>ID</th><th>Wallet Name</th><th>Wallet Type</th><th>Wallet ID</th><th>Wallet Balance</th><th><button>edit</button></th><th>Wallet Status</th></tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["walletname"]."</td>
                        <td>".$row["wallettype"]."</td>
                        <td>".$row["w_id"]."</td>
                        <td>".$row["walletbalance"]."</td>
                        <td></td>
                        <td>".$row["status"]."</td>
                        </tr>";
                    }  
                }
                        echo "</table><br /><br />";                            
                        $sql = "SELECT * FROM f_loan WHERE username = '{$_SESSION['username']}'"; 
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table><tr><th>ID</th><th>Username</th><th>Loan name</th><th>Loan amount</th><th>Monthly</th><th>Period<span style="font-size:12; color:blue;"> (years)</span></th></tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["username"]."</td>
                        <td>".$row["flo_name"]."</td>
                        <td>".$row["flot_amount"]."</td>
                        <td>".$row["flomi_amount"]."</td>
                        <td>".$row["flo_period"]."</td>             
                        </tr>";


                            
                    }

                }






           
        
               
             


















                        echo "</table><br /><br />";
                       

                                echo '<br /> <br />  <p>How to edit outputs?</p>
                                <p>Does it support اللغة العربية ؟</p>
                                <p>تم إنشاء الصفحة <a href="/www3/ar">باللغة العربية</a></p>
                                <p>هل قاعدة بيانات الـ SQL تدعم ادراج الحروف العربية؟</p>
                                <br /><h4>Creating fully operational comment system from scratch</h4><br />
                                ';
         
                                
                                
                                
            

                                
                            } else {
                        echo '                        <div class="content-block">


                           <center>
                           <section class="login">
                                <div class="container">

                                <center><img src="img/logo.png" title="Logo" hieght="80" width="160"></img></center>
                                         <h3><i class="icon fa fa-lock"> Login:</h3></i>
                                       <form method="POST" action="forms.inc.php">
                                        
                                          <input class="form-control" type="text" class="input" name="username" placeholder="Username..." /><br />
                                          <input class="form-control" type="password" class="input" name="pass" placeholder="Password..." /><br />
                                          <input class="btn btn-primary" type="submit" value="Login" name="loginbutton"/>
                                        </form>
                                        
                                <span style="font-size:10;"><p> Don`t have an account? <a href="register.php"><i class="icon fa fa-user"> Signup HERE.</i></a></span>
                                </div>
                            </section>
                            </center>
                            <!-- footer -->
                            </div>
 ';                                            
                                    }                                        
                                    ?>


                                    </div></div>
                                </section>


<!-- footer -->
<footer>       <?php include('./_partial/_footer.php') ?>       
                                </footer>
</div>
                        </div> 
                    </div>
        
        
        


              </div>  
        </div>  
        

<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>