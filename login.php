<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => 'legendary','username1' => 'Legendary','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    $Password = strtolower($Password);
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>*Please Enter the Correct Password</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
  <title>test</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <!--[if lte IE 9]>
      <p class="browserupgrade" style="background-color: #CB0475; color: #ffffff;">Sorry, your browser is not supported. To improve your experience we recommend using a <a href="http://browsehappy.com/">modern browser</a>.</p>
  <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,700,700i|Open+Sans:300,400" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->

    <!--build:css css/styles.min.css-->
    <link rel="stylesheet" type="text/css" href="stylesheets/formalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <!--endbuild-->

    <!--build:js js/main.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.min.js"></script>
    <!-- endbuild -->

</head>
<body class="navient-body home-page login-bg">

  <div class="outer_form_container section1">
    <div class="form-container">
      <div class="msg-container">
        <div class="img_container">
          <img src="images/logo.png"/>
        </div>
        <p style="color:#000;">
        It is our delight and our privilege to share how we'll work together to create a customer experience worthy of the enduring legacy 
        </p>
      </div>
      <form action="" method="post" name="Login_Form" id="form_id">
        <input style="display:none;" name="Username" type="hidden" class="Input" value="Alex">
        <input id="password" name="Password" type="text3" placeholder="ENTER PASSWORD" required />
        <input id="submit" name="Submit" type="submit" value="ENTER SITE" class="Button3" />
        <?php if(isset($msg)){?>
        <div class="login-alert"><?php echo $msg;?></div>
        <?php } ?>
      </form>
    </div>
  </div>


</body>
</html>