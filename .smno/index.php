
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
                        <div class="content-block">
                            <div class="container"><br /><br /><br />
                            <center>
                               <section class="register">
                                    <div class="container">
                                        <br />
                                        <center><img src="img/logo.png" title="Logo" hieght="120" width="220"></img></center>
                                        <br />
                                        <h3><i class="icon fa fa-lock"> Register:</h3></i>
                                           <form method="POST" action="signup.inc.php">
                                              <br />
                                              <input class="form-control" minlength="3" type="text" class="input" name="username" placeholder="Username..." /><br />
                                              <input class="form-control" minlength="3" type="email" class="input" name="email" placeholder="Email..." /><br />
                                              <input class="form-control" minlength="3" type="password" class="input" name="pass" placeholder="Password..." /><br />
                                              <input class="form-control" minlength="3" type="password" class="input" name="cpass" placeholder="Confirm your password..." /><br /><br /><br />
                                              <input class="btn btn-primary" type="submit" value="Register" name="registerbutton"/>
                                            </form>
                                    <br />




                                    <?php include('process.fun.php'); ?>

 <form id="register_form" method="POST" action="signup.inc.php">
      <h1>Register</h1>
      <div id="error_msg"></div>
      <input class="form-control" minlength="3" type="text" class="input" name="uid" placeholder="Nickname..." /><br />

	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
       <input type="password" name="pass" placeholder="Password" id="pass">
       <input type="password" name="cpass" placeholder="cPassword" id="pass">
	  </div>
	  <div>
      <input  id="reg_btn" class="btn btn-primary" type="submit" value="Register" name="registerbutton"/>






<script>


    
$('document').ready(function(){
    var username_state = false;
    var email_state = false;
    $('#username').on('blur', function(){
     var username = $('#username').val();
     if (username == '') {
         username_state = false;
         return;
     }
     $.ajax({
       url: 'register.php',
       type: 'post',
       data: {
           'username_check' : 1,
           'username' : username,
       },
       success: function(response){
         if (response == 'taken' ) {
             username_state = false;
             $('#username').parent().removeClass();
             $('#username').parent().addClass("form_error");
             $('#username').siblings("span").text('Sorry... Username already taken');
         }else if (response == 'not_taken') {
             username_state = true;
             $('#username').parent().removeClass();
             $('#username').parent().addClass("form_success");
             $('#username').siblings("span").text('Username available');
         }
       }
     });
    });		
     $('#email').on('blur', function(){
        var email = $('#email').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
         url: 'register.php',
         type: 'post',
         data: {
             'email_check' : 1,
             'email' : email,
         },
         success: function(response){
             if (response == 'taken' ) {
             email_state = false;
             $('#email').parent().removeClass();
             $('#email').parent().addClass("form_error");
             $('#email').siblings("span").text('Sorry... Email already taken');
             }else if (response == 'not_taken') {
               email_state = true;
               $('#email').parent().removeClass();
               $('#email').parent().addClass("form_success");
               $('#email').siblings("span").text('Email available');
             }
         }
        });
    });
   
    $('#reg_btn').on('click', function(){
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#pass').val();
        if (username_state == false || email_state == false) {
         $('#error_msg').text('Fix the errors in the form first');
       }else{
         // proceed with form submission
         $.ajax({
             url: 'register.php',
             type: 'post',
             data: {
                 'save' : 1,
                 'email' : email,
                 'username' : username,
                 'pass' : pass,
             },
             success: function(response){
                 alert('user saved');
                 $('#username').val('');
                 $('#email').val('');
                 $('#pass').val('');
             }
         });
        }
    });
   });



   </script>




	  </div>
	</form>

                                    <span style="font-size:10;"><p> Already a member <a href="login.php"><i class="icon fa fa-user"> Login HERE.</i></a></span>

                                    </div>
                                </section>
                                </center>
                                <!-- footer -->
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div> 
                </div>
                < ?php include('./_partial/_footer.php')?>
                <?php include('./_partial/_buttomtoolbar.php')?>
              </div>  
        </div>  
<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>