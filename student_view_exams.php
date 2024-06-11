<?php include 'student_header.php'?>
<center>
    <h1>view Exams</h1>
    <table class="table" style="width:700px">
        <tr>
            <th>si</th>
            <th>exam name</th>
            <th>date</th>
            <th>time</th>
            <th>exam fees</th>
           
        </tr>
        <?php
        $q="SELECT * FROM exam WHERE `status`='active'";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                 
              
                <td><?php echo $key['exam_title'] ?></td>
                
                <td><?php echo $key['date'] ?></td>
                <td><?php echo $key['time'] ?></td>
                <td><?php echo $key['amount'] ?></td>
                <td><a href="student_make_payments.php?del=<?php echo $key['exam_id'] ?>&amount=<?php echo $key['amount']?>&type=exam" class="btn btn-success">pay exam fee</a></td>
                
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>