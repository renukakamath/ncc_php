<?php include 'student_header.php';
extract($_GET);
if (isset($_POST['add'])) 
{

extract($_POST);
	$dir = "images/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;

	// if ($file_type == "mp4" OR $file_type=="MP4"  ) {



		if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
		{

$q="insert into activities values(null,'$sid','$title','$target',now(),'$file_type')";
 insert($q);
	alert("certificate uploaded successfully");
	return redirect("student_add_activities.php");

}                                                               
		else
		{
			echo "file uploading error occured";
		}
	}
	// else
	// {
	// 	echo "invalid file format, file format =". $file_type;
	// 	echo "error";
	// }
	// }
 ?>


<section class="banner-silder">
		
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
<center>
    <form method="post" enctype="multipart/form-data">
    <h1 style="color: white">upload activities</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>title </th>
        <td><input type="text" required="" name="title" class="form-control" ></td>
    </tr>
    <tr>
        <th>file</th>
        <td><input type="file" required="" name="img" class="form-control"></td>
    </tr>
    <tr>
        <td align="center" colspan="2"><input type="submit" name="add" value="upload" class="btn btn-success"></td>
    </tr>
</table>
</form></center></div></div></div></li></ul></section>
<center>

    <h1>view activities</h1>
   



<!-- <h1 align="center">view user</h1> -->
<div class="container">
	<div class="row">
		<?php
		$q="select *,concat (student.`first_name`,student.`last_name`)as sname,concat (ncc_head.`first_name`,ncc_head.`last_name`) as tname from activities inner join student using (student_id) inner join ncc_head using (head_id)";
		$ch=select($q);
		foreach ($ch as $key) 
		{
				?>

		<div class="col-sm-12" style="margin-top: 20px;padding: 20px;margin-left: 60px;margin-right: 20px;margin-bottom: 20px;">
        
                <div align="left">name:<?php echo $key['sname'] ?></div>
                <div  align="left">title:<?php echo $key['title'] ?></div>
                <?php
                if ($key['type']=='jpg'or $key['type']=='png'or $key['type']=='JPG'or $key['type']=='PNG') 
                {
                    ?>
                    <div><img src="<?php echo $key['files'] ?>" width="100%" height="500px" onclick="this src"></div>
                    <?php
                }elseif ($key['type']=='mp4'or $key['type']=='mkv'or $key['type']=='MP$'or $key['type']=='MKV')
                 {
                     ?>
                     <div><video src="<?php echo $key['files'] ?>" width="500px" height="500px"></video></div>
                     <?php
                
                }   ?>
               
                
		</div>
		<?php
		
		}  ?>
	
		
	</div>

	
</div>
</center>

<?php include 'footer.php'?>