<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting('E_ALL &~E_NOTICE');
include("parentteachermenubar.php");
?>
<html>
<head>

	<style>
	div.ex1 {
    width:500px;
    margin: auto;
    border: 3px solid black;
    background-color:#b3ecff;
}
	.error
		{
			color: red;
		}
	</style>

	<title>Registration Form</title>
	
</head>

<body>

    <div class="ex1">
    <h1 align="center">Registration Form</h1>
	<form method="POST" enctype="multipart/form-data">

		<?php

		$name=$address=$place=$mobile=$gender=$dob=$country=$email=$user=$userid=$password=$photo='';
		//
	if($records[0]->id)
    {
    	$hdbox=$records[0]->id;
    	$name=$records[0]->name;
    	$address=$records[0]->address;
    	$place=$records[0]->place;
    	$mobile=$records[0]->mobile;
    	$gender=$records[0]->gender;
    	$dob=$records[0]->dob;
    	$country=$records[0]->country;
    	$email=$records[0]->email;
    	$user=$records[0]->user;
    	$userid=$records[0]->userid;
    	$password=$records[0]->password;
    	$photo=$records[0]->photo;
  	 }
    else
    {
		$name=set_value('name');
		$address=set_value('address');
		$place=set_value('place');
		$mobile=set_value('mobile');
		$gender=set_value('gender');
		$dob=set_value('dob');
		$country=set_value('country');
		$email=set_value('email');
		$user=set_value('user');
		$userid=set_value('userid');
		$password=set_value('password');
		$photo=set_value('photo');
    } 
		?>
	<table align="center">
		<input type="hidden" name="hdbox" value="<?php echo $hdbox;?>">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>">
					<span class="error" >*<?php echo form_error('name');?></span></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value="<?php echo $address; ?>">
					<span class="error" >*<?php echo form_error('address');?></span></td>
			</tr>
			<tr>
				<td>Place:</td>
				<td><input type="text" name="place" value="<?php echo $place; ?>">
					<span class="error" >*<?php echo form_error('place');?></span></td>
			</tr>
			<tr>
				<td>Mobile no:</td>
				<td><input type="text" name="mobile" value="<?php echo $mobile; ?>">
				<span class="error" >*<?php echo form_error('mobile');?></span></td>
			</tr>
			<tr>		
			<td>Gender:</td>
				<td><input type="radio" name="gender" value="M" <?php if($gender=="M"){ ?> checked <?php }?>required>MALE
				   <input type="radio" name="gender" value="M" <?php if($gender=="M"){ ?> checked <?php }?>required>FEMALE
				  <span class="error" >*<?php echo form_error('gender');?></span></td>
			
		</tr>

		    <tr>
			    <td>Date of birth:</td>
			    <td><input type="date" name="dob" value="<?php echo $dob; ?>">
			    	<span class="error" >*<?php echo form_error('dob');?></span></td>
            </tr>

            
            <tr>
 	            <td>Country:</td>
 	 			<td><select name="country">
 				<option selected="selected" disabled="disabled">--------country-------</option>
 	  			<option value="india" <?php if($country=="india"){ ?> selected <?php } ?>>India</option>
  	  			<option value="america" <?php if($country=="america"){ ?> selected <?php } ?>>America</option>
  	   			<option value="germany" <?php if($country=="germany"){ ?> selected <?php } ?>>Germany</option>
  	    		<option value="swedan" <?php if($country=="swedan"){ ?> selected <?php } ?>>Swedan</option>
   	 			<option value="australia" <?php if($country=="australia"){ ?> selected <?php } ?>>Australia</option>
   	 			<option value="finland" <?php if($country=="finland"){ ?> selected <?php } ?>>Finland</option>
   	 		 	<option value="croacia" <?php if($country=="croacia"){ ?> selected <?php } ?>>Croacia</option>
   	   			<option value="mexico" <?php if($country=="mexico"){ ?> selected <?php } ?>>Mexico</option>
   	    		<option value="koalia" <?php if($country=="koalia"){ ?> selected <?php } ?>>Koalia</option>
   	     		<option value="poland" <?php if($country=="poland"){ ?> selected <?php } ?>>Poland</option>
  				<span class="error" >*<?php echo form_error('country');?></span></td>
           	 </tr> 

          <tr>
				<td>Email:</td>
				<td><input type="email" name="email" value="<?php echo $email; ?>">
					<span class="error" >*<?php echo form_error('email');?></span></td>
			</tr>
			
			    <tr>
 	            <td>User:</td>
 	 			<td><select name="user">
 				<option selected="selected" disabled="disabled">--------user-------</option>
 	  			<option value="student" <?php if($user=="student"){ ?> selected <?php } ?>>Student</option>
  	 	 		<option value="parent" <?php if($user=="parent"){ ?> selected <?php } ?>>Parent</option>
  	   			<option value="teacher" <?php if($user=="teacher"){ ?> selected <?php } ?>>Teacher</option>
  	   		    </select>
  	   		    <span class="error" >*<?php echo form_error('user');?></span></td>
            </tr>

            <tr>
			    <td>User Id:</td>
			    <td><input type="text" name="userid" value="<?php echo $userid; ?>">
			    <span class="error" >*<?php echo form_error('userid');?></span></td>
            </tr>
           <tr>
			    <td>Password:</td>
			    <td><input type="password" name="password" value="<?php echo $password; ?>">
			    	<span class="error" >*<?php echo form_error('password');?></span></td>
            </tr>
            <tr>
                <td>Photo:</td>
                	<td><input type="file" name="photo" value="<?php echo $photo; ?>">
                	<span class="error" >*<?php echo form_error('photo');?></span></td>
            </tr>
            <tr>
                <td><td><input type="checkbox" name="agree"/>I agree the terms and conditions.
                	</td></td>
            </tr> 

     
			<tr>
			<td><td><input type="submit" name="submit"></td></td>
			</tr>
             
        </div>
		</table>
	</form>
	
    </div>
  
	</body>
	</html>