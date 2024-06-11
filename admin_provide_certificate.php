<?php include 'admin_header.php';
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

	$q="insert into certificate values(null,'$stuid','$target',now(),'$file_type')";
 insert($q);
	alert("certificate uploaded successfully");
	return redirect("admin_view_cadets.php");

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
    <h1 style="color: white">upload certificate</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>student name</th>
        <td><input type="text" name="sname" required="" class="form-control" value="<?php echo $sname ?>" readonly=""></td>
    </tr>
    <tr>
        <th>certificate</th>
        <td><input type="file" name="img" required="" class="form-control"></td>
    </tr>
    <tr>
        <td align="center" colspan="2"><input type="submit" name="add" value="upload" class="btn btn-success"></td>
    </tr>
</table>
</form>
</center>
</div></div></div></li></ul></section>
<?php include 'footer.php'?>