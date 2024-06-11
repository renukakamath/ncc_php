
<?php include 'admin_header.php';
extract($_GET);
if (isset($_POST['add'])) 
{
	extract($_POST);

	$q3="select * from login where user_name='$uname' and password='$pass'";
	$res=select($q3);

	if (sizeof($res)>0) {
		alert('already exist');
	}else{



	$q="insert into login values(null,'$uname','$pass','headteacher')";
	$ids=insert($q);
	 $q2="insert into ncc_head values(null,$ids,'$fname','$lname','$place','$ph','$mail')";
	insert($q2);
	alert("registration successfull");
	
}
}
if (isset($_GET['del'])) 
{
	extract($_GET);
	 $q4="delete from ncc_head where login_id='$del'";
	delete($q4);
	$q7="delete from login where login_id='$del'";
	delete($q7);

}
// if (isset($_GET['upd'])) 
// {
// 	extract($_GET);
// 	$q5="select * from student where student_id='$upd'";
// 	$key=select($q5);

// }
// if (isset($_POST['edit'])) 
// {
// 	extract($_POST);
// 	$q6="update student set first_name='$fname',last_name='$lname',dept='$dept',course_year='$lyear',phone='$ph',email='$mail' where student_id='$upd'";
// 	update($q6);
// 	alert("update successfull");
// 	return redirect('admin_manage_student.php');

// }
?>

<script type="text/javascript">
	
var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('con_pass').value) {
  
    document.getElementById('msg').style.color = 'green';
    document.getElementById('msg').innerHTML = 'matching';
  } else {
 
    document.getElementById('msg').style.color = 'red';
    document.getElementById('msg').innerHTML = 'not matching';
  }
	}


</script>

<section class="banner-silder">
		
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
<center>
<h1 style="color: white"><?php if (isset($_GET['upd'])) 
{
	echo "update details";
}
else
{
	echo " add head teacher";
} ?></h1>


<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" required=""  class="form-control" placeholder="enter frist name" ></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" required="" class="form-control" placeholder="enter last name" ></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" name="place" required="" class="form-control" placeholder="enater place" ></td>
		</tr>
		
		<tr>
			<th>phone</th>
			<td><input type="text" name="ph" required="" pattern="[0-9]{10}" class="form-control" placeholder="enter phone" ></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="text" name="mail" class="form-control" placeholder="enter email" ></td>
		</tr>
		<?php if (isset($_GET['upd'])) 
		{
			?>
				<?php
		} else
		{

			?>
		<tr>
				<th>user name</th>
				<td><input type="text" required="" class=" form-control" name="uname"  placeholder="create a user name"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" class=" form-control" required="" pattern="[A-Za-z0-9]{>6}"  name="pass" placeholder="create a password" id="pass" onkeyup="check();" ></td>
			</tr>
			<tr>
				<th>confirm password</th>
				<td><input type="password" id="con_pass" class=" form-control" required="" pattern="[A-Za-z0-9]{>6}"  name="con_pass" placeholder="create a password" onkeyup="check();">
					<span id="msg"></span>
				</td>
			</tr>
			<?php
		}
		    ?>
		<tr>
			<td align="center" colspan="2"><input type="submit"class="btn btn-success"
				<?php if (isset($_GET['upd'])) 
				{
					?>
					 name="edit" value="update"
					 <?php
				}else
				{
					?>
					 name="add" value="register" 
				 <?php

				} ?>></td>
				
		</tr>
	</table>
      </form></div></div></div></li></ul></section></center>
      <center>


					<h1>view head teachers</h1>
					<table class="table" style="width: 800px">
						<tr>
							<th>si</th>
							<th>first name</th>
							<th>last name</th>
							<th>department</th>
							<th>course year</th>
							<th>phone</th>
							<th>email</th>
						</tr>
						<?php 
						$q3="select * from ncc_head";
						$temp=select($q3);
						$si=1;
						foreach ($temp as $key) 
						{
							?>
							<tr>
							<td><?php echo $si++ ?></td>
							<td><?php echo $key['first_name'] ?></td>
							<td><?php echo $key['last_name'] ?></td>
							<td><?php echo $key['place'] ?></td>
							
							<td><?php echo $key['phone'] ?></td>
							<td><?php echo $key['email'] ?></td>
							<!-- <td><a href="?upd=<?php echo $key['student_id'] ?>" class="btn btn-success">update</a></td> -->
							<td><a href="?del=<?php echo $key['login_id'] ?>" class="btn btn-warning" >delete</a></td>
							</tr>
							<?php

						}   ?>
						

					</table>				

</form>
</center>


<?php include 'footer.php'?>
