<html>
<head>
	</head>
	<body>
<form method="post" action="<?php echo base_url(); ?>index.php/Examgradescontroller/listnew">
		<table border="2">
			<tr>
				
				<th>Marks</th>
				<th>Grades</th>
				<th>Actions</th>
			</tr>

			<?php
			foreach ($records as $value)
			 {
			?>
			
			<tr>
				<td><?php echo $value->marks;?></td>
				<td><?php echo $value->grades;?></td>
				
    <td><a href="<?php echo base_url() ?>index.php/Examgradescontroller/index/<?php echo $value->id;?>">update</a></td>
    <td><a href="<?php echo base_url() ?>index.php/Examgradescontroller/delete/<?php echo $value->id;?>">delete</a></td>
           </tr>
           <?php	
			}
			?> -->
</table>
</body>
</html>
