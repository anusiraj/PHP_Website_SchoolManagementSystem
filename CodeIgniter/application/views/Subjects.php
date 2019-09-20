
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting('E_ALL &~E_NOTICE');

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<style>
	.error
		{
			color: red;
		}
	</style>

	<title>subjects</title>
	
</head>

<body>
	<h1 align="center">Managing class subjects</h1>
	<form method="POST">
<?php
		$class=$subjects='';

		$class=set_value('class');
		$subjects=set_value('subjects');
?>
		<div>
		<table align="center">
			<tr>
				<td>Class:</td>
				<td><input type="text" name="class" value="<?php echo $class; ?>">
					<span class="error" >*<?php echo form_error('class');?></span>
				</td>
			</tr>
			<tr>
				<td>Subjects:</td>
				<td><input type="checkbox" name="subjects" value="<?php echo $malayalamI; ?>">malayalamI
				<input type="checkbox" name="subjects" value="<?php echo $malayalamII; ?>">malayalamII
			    <input type="checkbox" name="subjects" value="<?php echo $english; ?>">english</td>
			</tr>
			<tr><td>
		        <td><input type="checkbox" name="subjects" value="<?php echo $hindi; ?>">hindi
		        <input type="checkbox" name="subjects" value="<?php echo $science; ?>">science
		        <input type="checkbox" name="subjects" value="<?php echo $maths; ?>">maths</td>
		    </td></tr>
		    <tr><td>
		        <td><input type="checkbox" name="subjects" value="<?php echo $social; ?>">social
		        <input type="checkbox" name="subjects" value="<?php echo $chemistry; ?>">chemistry
		        <input type="checkbox" name="subjects" value="<?php echo $Physics; ?>">Physics</td>
		    </td></tr>
		    <tr><td>
		        <td><input type="checkbox" name="subjects" value="<?php echo $biology; ?>">biology
		        <input type="checkbox" name="subjects" value="<?php echo $computer; ?>">computer 
		    <span class="error" >*<?php echo form_error('subjects');?></span>
		</td>
			</td></tr>

			<!-- <?php if($updateid==0){ $btnvalue = 'Submit';} else{ $btnvalue = 'Update'; } ?> -->
			<tr>
                <td><td><input type="submit" name="submit"></td></td>
            </tr>
             
		</table>
		
		</div>
	</form>
</html>