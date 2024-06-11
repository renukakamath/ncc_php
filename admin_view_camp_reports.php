<?php include 'admin_header.php';
extract($_GET);
?>
<center>
    <h1>view camp reports</h1>
    <table class="table" style="width:800px">
        <tr>
            <th>si</th>
            <th>camp name</th>
            <th>head teacher name</th>
            <th>details</th>
            <th>place</th>
            <th>cadets</th>
            <th>cadet phone</th>
            <th>date</th>
             
        </tr>
       
        <?php
        $q="SELECT *,CONCAT (student.`first_name`,student.`last_name`)AS sname,student.`phone` as sphone ,concat (ncc_head.`first_name`,ncc_head.`last_name`) as tname from camp_details inner join ncc_head using (head_id) inner join student using (head_id) ";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['title'] ?></td>
                <td><?php echo $key['tname'] ?></td>
                <td><?php echo $key['description'] ?></td>
                <td><?php echo $key['place'] ?></td>
                <td><?php echo $key['sname'] ?></td>
                <td><?php echo $key['sphone'] ?></td>
               
                <td><?php echo $key['date'] ?></td>
                
            </tr>
            <?php
        }   ?>
    </table>
</center>
<?php include 'footer.php'?>