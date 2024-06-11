<?php include 'admin_header.php';
extract($_GET);
?>
<center>
    <h1>view next year plans</h1>
    <table class="table" style="width:800px">
        <tr>
            <th>si</th>
            <th>next year plan</th>
            <th>plan details</th>
            <th>idea by</th>
            <th>contact number</th>
            
            <th>date</th>
             
        </tr>
       
        <?php
        $q="SELECT * FROM next_year_plan INNER JOIN ncc_head USING (head_id)";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['title'] ?></td>
                
                <td><?php echo $key['description'] ?></td>
                <td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
                <td><?php echo $key['phone'] ?></td>
            
               
                <td><?php echo $key['date'] ?></td>
                
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>