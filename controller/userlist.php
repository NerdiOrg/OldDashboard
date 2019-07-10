<br /><div style="width:50%;text-align:center;left:25%;position:relative;">
<h1>Manage Users</h1>

<center>
<table class='table-bordered table-hover' cellpadding='5'>
<thead>
<tr>
<th>User ID</th>
<th>Username</th>
<th>Email</th>
<th>Role</th>
</tr>
</thead>
<tbody>

<?php
// BEGIN THE TABLE FOR SHOWING ALL USERS LIST
$listUsersQ = "SELECT *, CASE WHEN role = 0 THEN 'Administrator' WHEN role = 1 THEN 'User' END AS role  FROM users ORDER BY role ASC"; 
$listUsersR = mysqli_query($conn, $listUsersQ); 
while($list = mysqli_fetch_assoc($listUsersR)){
	$listUsername = $list['username'];
	$listEmail = $list['email'];
	$listID = $list['id'];
	$listRole = $list['role'];
	
	echo"
	<tr>
	<td>$listID</td>
	<td>$listUsername</td>
	<td>$listEmail</td>
	<td>$listRole</td>
	<tr>
	"; 
	
}

?>
</tbody>
</table><br />
</center>
</div>