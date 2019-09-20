<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting('E_ALL &~E_NOTICE');
?>
<!DOCTYPE html>
<html>
<head>
	<title>School Management</title>
	<style type="text/css">
		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}
		#body {
			margin: 0 15px 0 15px;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		input[type=text]{
		    width:25%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}
		input[type=file]{
		    width:25%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}
		input[type=submit] {
		    width:25%;
		    background-color: #dd1529;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: #dd7127;
		}
	</style>
</head>
<body>
	<div id="container">
		<center>
		<h1>Login Form.....</h1>
	 
		<div id="body">

				<form method="POST" action="<?php echo base_url(); ?>index.php/Parentteacherregcontroller/login_validate" enctype="multipart/form-data">
			
					<div class="text">
						<label>Email:</label>
						<input type="email" name="email" >		
					</div>
					<div class="text">
						<label>Password:</label>
						<input type="password" name="password" >					
				    </div>
					
					<div>
						<input type="submit" name="sub" value="Submit"/>
					</div>
				</form>
		</div>
		</center>
			
	</div>
</body>
</html>
