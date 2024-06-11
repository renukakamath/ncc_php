<?php  include 'student_header.php' ?>
<center>
    <h1>download certificate</h1>
    <table class="table" style="width: 500px;">
    <tr>
        
        <th>si</th>
        <th>name</th>
        <th>certificate</th>
    </tr>

<?php
$q="select * from certificate inner join student using (student_id) where student_id='$sid'";
$ch=select($q);
$si=1;
foreach ($ch as $key) 
{
    ?>
    <tr>
        <td><?php echo $si++ ?> </td>
        <td><?php echo $key ['first_name']?><?php echo $key['last_name']?></td>
        <td><a href="<?php echo $key['certificate_file'] ?>" download="" class="btn btn-success" >download</a></td>
    </tr>
    <?php
}   ?>  

    </table>
</center>
<?php include 'footer.php'?>