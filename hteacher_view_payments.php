<?php include 'hteacher_header.php'?>
<center>
    <h1>view payments</h1>
    <table class="table" style="width:700px">
        <tr>
            <th>si</th>
            <th>student name</th>
            <th>payment for</th>
            <th>amount</th>
           
            <th>payment date</th>
        </tr>
        <?php
        $q="SELECT * FROM payment INNER JOIN student USING (student_id) where head_id='$hid'";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
                <td><?php echo $key['type'] ?></td>
                <td><?php echo $key['amount'] ?></td>
                
               
                <td><?php echo $key['date'] ?></td>
                
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>