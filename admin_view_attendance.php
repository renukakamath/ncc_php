<?php include 'admin_header.php';
extract($_GET);
?>



<center>
    <h1>view Attendance</h1>
    <table class="table" style="width:500px">
        <tr>
            <th>si</th>
            
            <th>attendence given by</th>
            <th>date</th>
            <th>status</th>
            <tr></tr>
            <tr>student name: <?php echo $sname ?></tr>       
        </tr>
        <?php
        $q="SELECT *,CONCAT (ncc_head.`first_name`,ncc_head.`last_name`) AS tname FROM attendance INNER JOIN ncc_head USING (head_id) INNER JOIN student USING (head_id) WHERE student.student_id='$stuid'";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['tname'] ?></td>
                <td><?php echo $key['date'] ?></td>
                <td><?php echo $key['status'] ?></td>
                
                               
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>