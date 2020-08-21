<?php
include('dbconnection.php');
define('TITLE','status');
define('PAGE','status');
include('header.php');
session_start();
if(!isset($_SESSION['is_login']))
{
	$email=$_SESSION['email'];
}
else{
	echo "<script>location.href='userlogin.php'</script>";
}
?>
<div class="col-sm-6 mt-5 mx-3">
	<form method="post" class="form-inline">
		<div class="form-group mr-3 ">
			<label for="checkid">user ID</label>
			<input type="text" class="form-control" name="checkid" id="checkid">
		</div>
		<button type="submit" class="btn btn-danger">Search</button>
	</form>
	<?php  
	if(isset($_REQUEST['checkid']))
	{
      $sql="SELECT * FROM assign WHERE id={$_REQUEST['checkid']}";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
	?>
	<h3 class="text-center font-weight-bold mt-5">Details</h3>
	<table class="table table-bordered text-white font-weight-bold">
		<tbody>
		<tr><td>Resquest ID</td>
			<td><?php if(isset($row['id']))
			{
				echo $row['id'];
			}
			?>
		</td></tr>
	<tr><td>info</td>
			<td><?php if(isset($row['description']))
			{
				echo $row['description'];
			}
			?></td></tr>
	<tr><td>info</td>
			<td><?php if(isset($row['info']))
			{
				echo $row['info'];
			}
			?></td></tr>
	<tr><td>info</td>
			<td><?php if(isset($row['name']))
			{
				echo $row['name'];
			}
			?></td></tr>
	<tr><td>info</td>
			<td><?php if(isset($row['add1']))
			{
				echo $row['add1'];
			}
			?></td></tr>
			<tr>
			<td>info</td>
			<td><?php if(isset($row['email']))
			{
				echo $row['email'];
			}
			?>
		</td></tr>
	<tr><td>info</td>
			<td><?php if(isset($row['mob']))
			{
				echo $row['mob'];
			}
			?>
		</td></tr>
</tbody>
</table>
<?php } ?>
</div>
<?php
	include('footer.php');
	?>