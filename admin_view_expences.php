<?php include 'admin_header.php'?>
<center>
    <h1>view expences</h1>
    <table class="table" style="width:700px">
        <tr>
            <th>si</th>
            <th>head teacher name</th>
            <th>expence for</th>
            <th>details</th>
            <th>expemce amount</th>
            <th>date</th>
        </tr>
        <?php
        $q="SELECT * FROM expences INNER JOIN ncc_head USING (head_id)";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
              
                <td><?php echo $key['title'] ?></td>
                <td><?php echo $key['details'] ?></td>
                <td><?php echo $key['amount'] ?></td>
                <td><?php echo $key['date'] ?></td>
                
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>