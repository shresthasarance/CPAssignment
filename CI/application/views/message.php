<?php

	//echo $notice;
	//echo $modelmsg;
	//echo $datas; 
	
	
?>

<table border="1">
<tr>
	<th>Name</th>
	<th>Password</th>
</tr>
<?php
foreach($datas->result() as $mydata){
?>
<tr>
	<td><?php echo $mydata->username;?></td>
	<td><?php echo $mydata->password;?></td>
</tr>


<?php
}
?>
</table>
