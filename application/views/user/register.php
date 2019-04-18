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
                <?php if (validation_errors()) {?>
                <div class="text-center alert alert-danger alert-dismissible fade in" role="alert" style="opacity:1;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo validation_errors(); ?>
                </div>
                <?php }?>
			    	<div class="login-head">
					    <h1>Elegant Login  and Register forms</h1>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Register</h2>
						 	 </div>
						  	<?php echo form_open('user/register'); ?>
						  		<input type="text" name="first_name" value="<?php if (set_value('first_name')) {echo set_value('first_name');}else{echo 'First Name';}; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" >
						  		<input type="text" name="last_name" value="<?php if (set_value('last_name')) {echo set_value('last_name');}else{echo 'Last Name';}; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" >
						  		<!-- <input type="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" > -->
						  		<input type="text" name="username" value="<?php if (set_value('username')) {echo set_value('username');}else{echo 'User Name';}; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
								<input type="password" name="password" value="<?php if (set_value('password')) {echo set_value('password');}else{echo 'Password';}; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
								<!-- <input type="password" value=" Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Confirm Password';}" > -->
								 <div class="Remember-me">
								<div class="p-container">
								<div class ="clear"></div>
							</div>
												 
								<div class="submit">
									<input type="submit" value="Sign Me Up >" >
								</div>
									<div class="clear"> </div>
								</div>
							<?php echo form_close(); ?>
					</div>
			</div>
			  </div>
	</body>
</html>


