<!DOCTYPE html>
<html>
	<head>	
		<title>Register-login-form Website Template | Home :: 小贝壳网站模板</title>
		<link href="/resource/css/sign.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
		<!--start-login-form-->
	    <div class="main">
                <?php if (isset($_SESSION['login_failed'])) {?>
                    <div class="text-center alert alert-danger alert-dismissible fade in" role="alert" style="opacity:1;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $_SESSION['login_failed']; ?>
                    </div>
                <?php }?>
			    	<div class="login-head">
					    <h1>Elegant Login  and Register forms</h1>
					</div>
					<div  class="wrap">
					    <div class="Login">
							<div class="Login-head">
						    	<h3>LOGIN</h3>
						 	</div>
						    <?php echo form_open('user/login'); ?>
								<div class="ticker">
									<h4>Username</h4>
						  			<input type="text" name="username" value="John Smith" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'John Smith';}" ><span> </span>
						  			<div class="clear"> </div>
						  		</div>
						  		<div>
						  		<h4>Username</h4>
								<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
								<div class="clear"> </div>
								</div>
								<div class="submit-button">
									<input type="submit" value="LOGIN  >" >
								</div>
								<div class="clear"> </div>
								</div>
                                <?php echo form_close(); ?>
					</div>
			</div>
	    </div>
	</body>
</html>


