<?php include 'hteacher_header.php'?>
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