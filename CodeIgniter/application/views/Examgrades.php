<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting('E_ALL &~E_NOTICE');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<style>
	.error
		{
			color: red;
		}
	</style>

	<title>examgrades</title>
	
</head>

<body>
	<h1 align="center">Managing exam grades</h1>
	<form method="post">
<?php
		$marks=$grades='';
	if($records[0]->id)
   	{
    	$hdbox=$records[0]->id;
    	$marks=$records[0]->marks;
    	$grades=$records[0]->grades;
    }
    else
    {
		$marks=set_value('marks');
		$grades=set_value('grades');
	}
		?>
		<div>
		<table align="center">
					<input type="hidden" name="hdbox" value="<?php echo $hdbox;?>">

			<tr>
				<td>Marks:</td>
				<td><input type="text" name="marks" value="<?php echo $marks;?>">
					<span class="error" >*<?php echo form_error('marks');?></span></td>
			</tr>

			<tr>
 	           <td>Grades:</td>
               <td><select name="grades" >
 		       <option selected="selected" disabled="disabled">--------grade-------</option>
 	           <option value="A+" <?php if($grades=="A+"){ ?> selected <?php } ?>>A+</option>
  	           <option value="A"  <?php if($grades=="A"){ ?> selected <?php } ?>>A</option>
  	           <option value="B+" <?php if($grades=="B+"){ ?> selected <?php } ?>>B+</option>
  	           <option value="B" <?php if($grades=="B"){ ?> selected <?php } ?>>B</option>
   	           <option value="C+" <?php if($grades=="C+"){ ?> selected <?php } ?>>C+</option>
   	           <option value="C" <?php if($grades=="C"){ ?> selected <?php } ?>>C</option>
   	           <option value="D+" <?php if($grades=="D+"){ ?> selected <?php } ?>>D+</option>
   	           <option value="D" <?php if($grades=="D"){ ?> selected <?php } ?>>D</option>
   	           <option value="Disqualified" <?php if($grades=="Disqualified"){ ?> selected <?php } ?>>Disqualified</option>
   	       	   </select><span class="error" >*<?php echo form_error('grades');?></span></td>
               </tr>

            	

            <tr>
            	<?php if($hdbox==0){ $btnvalue = 'Submit';} else{ $btnvalue = 'Update'; } ?>
                <td><td><input type="submit" name="submit" value="<?php echo $btnvalue;?>"></td></td>
            </tr>
             

		</table>
<a href="<?php echo base_url()?>index.php/Examgradescontroller/listnew">Display</a>
		</div>

	</form>
</html>