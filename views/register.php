<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  	<div class="row">
  		<div class="col-md-2">
  			
  		</div>
  		<div class="col-md-8">
  		<h1>Register</h1>
  		<?php
  			if(isset($_SESSION['msg'])){ ?>
			<div class="alert alert-danger">
				<ul>
				<?php 
					foreach ($_SESSION['msg'] as $name => $value) {
					?>
						<li><?php echo $value;?></li>
					<?php
					}
				?>
				</ul>
			</div>
			<?php
  			}
  		?>
  		<hr>
  			<form id="registerform" name="registerform" class="form-horizontal" action="/register" method="post">
			  <div class="form-group">
			    <label for="first_name" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			    <input name="first_name" type="text" class="form-control required" id="first_name" placeholder="First Name">
			  	</div>
			  </div>
			  <div class="form-group">
			    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			    	<input name="last_name" type="text" class="form-control required" id="last_name" placeholder="Last Name">
			  	</div>
			  </div>
			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			    	<input name='email' type="email" class="form-control required email" id="email" placeholder="user@example.com">
				</div>
			  </div>
  			  <div class="form-group">
			    <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
			    <div class="col-sm-10">
			    	<input name="verify_email" type="email" class="form-control required email" id="verify_email" placeholder="user@example.com">
				  </div>
			  </div>
  			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			    	<input name='password' type="password" class="form-control required" id="password">
				</div>
			  </div>
  			  <div class="form-group">
			    <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
			    <div class="col-sm-10">
			    	<input name="verify_password" type="password" class="form-control required" id="verify_password">
				  </div>
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>		
  		</div>
  	</div>
  </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>