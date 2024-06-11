<?php include 'hteacher_header.php';
extract($_GET);



if (isset($_POST['sub'])) 
{
	extract($_POST);

	$q1="insert into attendance values(null,'$stuid','$hid','$mark','$attendence')";
	insert($q1);
	
	

	alert("attendence uploaded");
	return redirect("hteacher_add_students.php");

}
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q3="delete from attendance where attendence_id='$del'";
	delete($q3);
	alert("attendence deleted");
	return redirect("hteacher_add_students.php");

}
?>

 
<section class="banner-silder">
		
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">

<center>
	<h1 style="color: white">mark attendance</h1>
	<form method="post">
		<table class="table" style="width: 500px">

			<tr>
				<th>student name</th>
				<td><input type="text" readonly="" required="" name="nam" class="form-control" value="<?php echo $sname ?>"></td>
			</tr>
			<tr>
				<th>date</th>
				<td><input type="date" name=" mark" required="" class="form-control"  value="now()"></td>
			</tr>
			<tr>
				<th>attendence</th>
				<td><input type="radio" required="" name="attendence" value="present">&nbsp&nbsp&nbsp&nbsp present &nbsp&nbsp&nbsp&nbsp <input type="radio" required="" name="attendence" value="absent">&nbsp&nbsp&nbsp&nbsp absent &nbsp&nbsp&nbsp&nbsp</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="sub" value="add attendence" class="btn btn-success"></td>
			</tr>
		</table>
	</form></center></div></div></div></li></ul></section>
	<center>
		<h1>view student attendence</h1>
					<table class="table" style="width: 800px">
						<tr>
							<th>si</th>
							<th>student name</th>
							<th>attendance marked by</th>
							<th>date</th>
					
							<th>status</th>
							
						</tr>
						<?php 
				    	$q3="select *,concat (student.`first_name`,student.`last_name`) as sname , concat (ncc_head.`first_name`,ncc_head.`last_name`) as hname from attendance  inner join ncc_head using (head_id) inner join student using (student_id) WHERE attendance.head_id='$hid' AND student_id='$stuid'";
						$temp=select($q3);
						$si=1;
						foreach ($temp as $key) 
						{
							?>
							<tr>
							<td><?php echo $si++ ?></td>
							<td><?php echo $key['sname'] ?></td>
							<td><?php echo $key['hname'] ?></td>
							<td><?php echo $key['date'] ?></td>
							
							<td><?php echo $key['status'] ?></td>

				
				</tr>
				<?php
			}   ?>
		</table>
	
	</form>
</center>

<?php include 'footer.php'?>