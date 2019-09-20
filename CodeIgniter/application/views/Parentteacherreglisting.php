<html>
<head>
	</head>
	<body>
<form method="post" action="<?php echo base_url(); ?>index.php/Parentteacherregcontroller/listnew">
		<table border="2">
			<tr>
				
				<th>Name></th>
				<th>Address</th>
				<th>Place</th>
				<th>Mobile</th>
				<th>Gender</th>
				<th>Dob</th>
				<th>Country</th>
				<th>Email</th>
				<th>User</th>
				<th>User ID</th>
				<th>Password</th>
				<th>Photo</th>
				<th>Actions</th>
			</tr>

			<?php
			foreach ($records as $value)
			 {
			?>
			
			<tr>
				<td><?php echo $value->name;?></td>
				<td><?php echo $value->address;?></td>
				<td><?php echo $value->place;?></td>
				<td><?php echo $value->mobile;?></td>
				<td><?php echo $value->gender;?></td>
				<td><?php echo $value->dob;?></td>
				<td><?php echo $value->country;?></td>
				<td><?php echo $value->email;?></td>
				<td><?php echo $value->user;?></td>
				<td><?php echo $value->userid;?></td>
				<td><?php echo $value->password;?></td>
	 			<td><?php echo $value->photo;?></td>
    <td><a href="<?php echo base_url() ?>index.php/Parentteacherregcontroller/index/<?php echo $value->id;?>">update</a></td>
    <td><a href="<?php echo base_url() ?>index.php/Parentteacherregcontroller/delete/<?php echo $value->id;?>">delete</a></td>
           </tr>
           <?php	
			}
			?> -->
</table>
</body>
</html>
