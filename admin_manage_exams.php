
<?php include 'admin_header.php';
if (isset($_POST['add'])) 
{
	extract($_POST);
	$q1="insert into exam values (null,'$en','$ef','$ed','$et','active')";
	$id=insert($q1);
	
	alert("exam uploaded");
	return redirect('admin_manage_exams.php');

}
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q6="delete from exam where exam_id='$del'";

	delete($q6);
    alert("data deleted");
    return redirect('admin_manage_exams.php');

}
if (isset($_GET['upd'])) 
{
	extract($_GET);
	$q7="select * from exam where exam_id='$upd' ";
	$ch=select($q7);
	

}
if (isset($_POST['update'])) 
{
	extract($_POST);
	$q9="update exam set exam_title='$en',amount='$ef',date='$ed',time='$et' where exam_id='$upd'";
	update($q9);
    
	alert("update successfully");
	return redirect ('admin_manage_exams.php');
}
if (isset($_GET['inc'])) 
{
    extract($_GET);
    $q2="update exam set status='finished' where exam_id='$inc'";
    update($q2);
    alert("status updated");
    return redirect ('admin_manage_exams.php');

}
?>

<section class="banner-silder">
        
            <ul>
                <li>
                    <div class="banner-top banner-top1">
                        <div class="container">
                            <div class="banner-info info2">


				<form method="post">
		<center>
		
	
						<h2 style="color: white"><?php if (isset($_GET['upd'])) 
						{
							?>
							update exam details
							<?php
						} else
						{
							?>
							manage exam details
							<?php

						} ?></h2>
			<table class="table" style="width: 600px;color: black">
		
					 
				<tr>
					<th>exam name</th>
					<td><input type="text" name="en"  required pattern="[a-zA-Z\s]{0,30}" title="enter alphabets only" class="form-control"  value="<?php if(isset($_GET['upd'])) {echo $ch[0]['exam_title']; } ?>"></td>
				</tr>
				<tr>
					<th>exam fee</th>
					<td><input type="number" name="ef"required  class="form-control"  value="<?php if(isset($_GET['upd'])) {echo $ch[0]['amount']; } ?>"></td>
				</tr>
				<tr>
					<th>exam date</th>
					<td><input type="date" name="ed" required="" class="form-control" value="<?php if(isset($_GET['upd'])) {echo $ch[0]['date']; } ?>"></td>
				</tr>
		
				<tr>
					<th>time</th>
					<td><input type="time" name="et"  required  class="form-control"  value="<?php if(isset($_GET['upd'])) {echo $ch[0]['time']; } ?>"></td>
				</tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" class="btn btn-success" <?php if (isset($_GET['upd'])) 
                    {
                        ?>
                        name="update" value="update exam"
                        <?php
                    }
                    else
                    {
                        ?>
                        name="add" value="add exam"
                        <?php
                    
                    } ?>></td>
                </tr>
			
			</table>
		</center></form></div></div></div></li></ul></section>	
		<center>			
			
				<h1>view exam deatails</h1>
				<table class="table" style="width: 900px">
					<tr>
						<th>si</th>
						<th>exam name</th>
						<th>exam  fee</th>
						<th>exam date </th>
						<th>exam time</th>
						<th>status </th>
						

					</tr>
					<?php
					$q5="select * from exam";
                    $temp=select($q5);
					$si=1;
					foreach ($temp as $key) 
					{
						?>
						<tr>
						<td><?php echo $si++ ?></td>
						<td><?php echo $key['exam_title'] ?></td>
						<td><?php echo $key['amount'] ?></td>
						<td><?php echo $key['date'] ?></td>
						<td><?php echo $key['time'] ?></td>
						<td><?php echo $key['status'] ?></td>
						
						<td><a href="?del=<?php echo $key['exam_id'] ?>" class="btn btn-success">delete</a></td>
						<td><a href="?upd=<?php echo $key['exam_id'] ?>" class="btn btn-warning">update</a></td>
                        <td><a href="?inc=<?php echo $key['exam_id'] ?>" class="btn btn-info">update status</a></td>
						</tr>
						<?php
					} ?>
				</table>

				</form>
		</center>
	</form>


	
<?php include 'footer.php'?>