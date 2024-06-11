<?php include 'admin_header.php'?>
<center>
    <h1>view cadets</h1>
    <table class="table" style="width:700px">
        <tr>
            <th>si</th>
            <th>firstname</th>
            <th>last names</th>
            <th>place</th>
            <th>phone</th>
            <th>email</th>
        </tr>
        <?php
        $q="select *,concat(student.first_name,student.last_name) as sname from student ";
        $temp=select($q);
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
                <td><a href="admin_view_attendance.php?stuid=<?php echo $key ['student_id'] ?>&sname=<?php echo $key['sname'] ?>"class="btn btn-success">view attendance</a></td>
                <td><a href="admin_provide_certificate.php?stuid=<?php echo $key ['student_id'] ?>&sname=<?php echo $key['sname'] ?>"class="btn btn-warning">provde certificate</a></td>
               
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>